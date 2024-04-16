<?php

class Endereco
{
  public $cep;
  public $logradouro;
  public $cidade;
  public $estado;

  function __construct($cep, $logradouro, $cidade, $estado)
  {
    $this->cep = $cep;
    $this->logradouro = $logradouro;
    $this->cidade = $cidade;
    $this->estado = $estado;
  }
}

$cep = $_GET['cep'];

$url = "https://viacep.com.br/ws/{$cep}/json/";
$json = file_get_contents($url);
$data = json_decode($json);

$endereco = new Endereco($data->cep, $data->logradouro, $data->localidade, $data->uf);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($endereco);