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
  case "excluirEndereco":
    $cep = $_GET["cep"] ?? "";
    Endereco::RemoveByCEP($pdo, $cep);
    header("location: controlador-enderecos.php?acao=listarEnderecos");
    break;

  //-----------------------------------------------------------------
  case "listarEnderecos":
    $arrayEnderecos = Endereco::GetFirst30($pdo);
    include "../../Restrito/mostrar-endereco.php";
    break;

  //-----------------------------------------------------------------
  default:
    exit("Ação não disponível");
}
