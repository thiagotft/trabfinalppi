<?php
require "../../connection.php";

if (isset($_POST['especialidade'])) {
    $pdo = getConnection();
    $especialidade = $_POST['especialidade'];

    $query = 'SELECT pessoa.nome, medico.codigo
              FROM medico
              JOIN funcionario ON medico.codigo = funcionario.codigo
              JOIN pessoa ON funcionario.codigo = pessoa.codigo
              WHERE medico.especialidade = :especialidade';
    $statement = $pdo->prepare($query);
    $statement->bindParam(':especialidade', $especialidade);
    $statement->execute();

    $medicos = $statement->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($medicos);
} else {
    echo json_encode([]);
}

