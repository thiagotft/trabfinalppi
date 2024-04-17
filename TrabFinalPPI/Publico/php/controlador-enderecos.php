<?php

require "../../connection.php";
require "endereco.php";

// resgata a ação a ser executada
$acao = $_GET['acao'];

// conecta ao servidor do MySQL
$pdo = getConnection();

switch ($acao) {
  
  case "adicionarEndereco":
   
    $cep = $_POST["cep"] ?? "";
    $logradouro = $_POST["logradouro"] ?? "";
    $cidade = $_POST["cidade"] ?? "";
    $estado = $_POST["estado"] ?? "";
    $novoEndereco = new Endereco($cep, $logradouro, $cidade, $estado);
    $novoEndereco->AddToDatabase($pdo);
    header("location: ../endereco.html");
    break;

  //-----------------------------------------------------------------
  default:
    exit("Ação não disponível");
}
