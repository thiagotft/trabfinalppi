<?php
require '../connection.php';
$pdo = getConnection();

$nome = htmlspecialchars($_POST['inputNome'] ?? '');
$sexo = htmlspecialchars($_POST['inputSexo'] ?? '');
$email = htmlspecialchars($_POST['inputEmail'] ?? '');
$telefone = htmlspecialchars($_POST['inputTelefone'] ?? '');
$cep = htmlspecialchars($_POST['inputCep'] ?? '');
$logradouro = htmlspecialchars($_POST['inputLogradouro'] ?? '');
$cidade = htmlspecialchars($_POST['inputCidade'] ?? '');
$estado = htmlspecialchars($_POST['inputEstado'] ?? '');
$peso = htmlspecialchars($_POST['inputPeso'] ?? '');
$altura = htmlspecialchars($_POST['inputAltura'] ?? '');
$tipoSanguineo = htmlspecialchars($_POST['inputTipoSanguineo'] ?? '');

try {
    $pdo->beginTransaction();
    
    $sqlPessoa = <<<SQL
    INSERT INTO Pessoa (nome, sexo, email, telefone, cep, logradouro, cidade, estado)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)
    SQL;

    $stmt = $pdo->prepare($sqlPessoa);
    $result1 = $stmt->execute([
        $nome, $sexo, $email,
        $telefone, $cep, $logradouro,
        $cidade, $estado
    ]);
    if(!$result1) {
        throw new Exception('Falha na operação em Pessoa.');
    }
    
    $lastInsertedId = $pdo->lastInsertId();

    $sqlPaciente = <<<SQL
    INSERT INTO Paciente (codigo, peso, altura, tipoSanguineo)
    VALUES (?, ?, ?, ?)
    SQL;
   
    $stmt = $pdo->prepare($sqlPaciente);
    $result2 = $stmt->execute([$lastInsertedId, $peso, $altura, $tipoSanguineo]);
    if(!$result2) {
        throw new Exception('Falha na operação em Paciente.');
    }

    $pdo->commit();

    header("location: ../Restrito/listaPaciente.php");
    exit();
} catch (Exception $e) {
    exit('Falha ao cadastrar os dados do paciente: ' . $e->getMessage());
}
