<?php
require "../../connection.php";

if (isset($_POST['especialidade'])) {
    $pdo = getConnection();
    $especialidade = $_POST['especialidade'];

    $query = 'SELECT codigo,nome FROM medico WHERE especialidade = :especialidade';
    $statement = $pdo->prepare($query);
    $statement->bindParam(':especialidade', $especialidade);
    $statement->execute();

    $medicos = $statement->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($medicos);
} else {
    echo json_encode([]);
}


