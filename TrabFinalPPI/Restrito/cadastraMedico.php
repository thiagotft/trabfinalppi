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
$dataContrato = htmlspecialchars($_POST['inputDataContrato'] ?? '');
$salario = htmlspecialchars($_POST['inputSalario'] ?? '');
$senha = htmlspecialchars($_POST['inputSenha'] ?? '');
$especialidade = htmlspecialchars($_POST['inputEspecialidade'] ?? '');
$crm = htmlspecialchars($_POST['inputCrm'] ?? '');

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

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

    $sqlFuncionario = <<<SQL
    INSERT INTO Funcionario (codigo, dataContrato, salario, senhaHash)
    VALUES (?, ?, ?, ?)
    SQL;

    $stm = $pdo->prepare($sqlFuncionario);
    $result2 = $stm->execute([
        $lastInsertedId, $dataContrato, $salario, $senhaHash
    ]);
    if(!$result2) {
        throw new Exception('Falha na operação em Funcionário.');
    }

    $sqlMedico = <<<SQL
    INSERT INTO Medico (codigo, especialidade, crm)
    VALUES (?, ?, ?)
    SQL;

    $stm = $pdo->prepare($sqlMedico);
    $result3 = $stm->execute([
        $lastInsertedId, $especialidade, $crm
    ]);
    if(!$result3) {
        throw new Exception('Falha na operação em Médico.');
    }

    $pdo->commit();

    header("location: ../Restrito/listaFunc.php");
    exit();
} catch (Exception $e) {
    exit('Falha ao cadastrar os dados do médico: ' . $e->getMessage());
}
