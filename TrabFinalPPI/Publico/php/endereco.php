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

  public function AddToDatabase($pdo)
  {
    try {
      $sql = <<<SQL
      INSERT INTO endereco (cep, logradouro, cidade, estado)
      VALUES (?, ?, ?, ?)
      SQL;

      $stmt = $pdo->prepare($sql);
      $stmt->execute([$this->cep, $this->logradouro, $this->cidade, $this->estado]);
    } catch (Exception $e) {
      exit('Falha inesperada: ' . $e->getMessage());
    }
  }


} 