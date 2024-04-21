<?php
require '../connection.php';

$pdo = getConnection();
$cep = $_GET['cep']; 

$query = "SELECT logradouro, cidade, estado FROM endereco WHERE cep = :cep";
$stmt = $pdo->prepare($query);
$stmt->execute(['cep' => $cep]);
$endereco = $stmt->fetch(PDO::FETCH_ASSOC);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($endereco);



