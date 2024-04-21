<?php
require '../../connection.php';
$pdo = getConnection();
$data = htmlspecialchars($_POST['data'] ?? '');
$hora = htmlspecialchars($_POST['horario'] ?? '');
$nome = htmlspecialchars($_POST['nome'] ?? '');
$sexo = htmlspecialchars($_POST['sexo'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$codigoMedico = htmlspecialchars($_POST['medico'] ?? '');

    try{
    $pdo->beginTransaction();    
    $sql1 = <<<SQL
    INSERT INTO agenda (data_ag, horario, nome, sexo, email, codigomedico)
    VALUES (?, ?, ?, ?, ?, ?)
    SQL;
    $stmt1 = $pdo->prepare($sql1);
    $stmt1->execute([
        $data,
        $hora,
        $nome,
        $sexo,
        $email,
        $codigoMedico
    ]);
    if(!$stmt1) {
        throw new Exception('Falha na operação em Pessoa.');
    }
    $pdo->commit();
    header('Location: ../agendamentoconsulta.php');
    exit();
} catch (Exception $e) {
    exit('Falha ao cadastrar os dados: ' . $e->getMessage());
}