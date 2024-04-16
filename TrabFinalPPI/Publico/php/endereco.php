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

  public static function GetFirst30($pdo)
  {
    try {
      $sql = <<<SQL
      SELECT cep, logradouro, cidade, estado
      FROM endereco
      LIMIT 30
      SQL;

      $stmt = $pdo->query($sql);

      $arrayEnderecos = [];
      while ($row = $stmt->fetch()) {
        $cep = htmlspecialchars($row['cep']);
        $logradouro = htmlspecialchars($row['logradouro']);
        $cidade = htmlspecialchars($row['cidade']);
        $estado = htmlspecialchars($row['estado']);

        $novoEndereco = new Endereco(
          $cep,
          $logradouro,
          $cidade,
          $estado
        );
        $arrayEnderecos[] = $novoEndereco;
      }
      return $arrayEnderecos;
    } catch (Exception $e) {
      exit('Falha inesperada: ' . $e->getMessage());
    }
  }

  public static function RemoveByCEP($pdo, $cep)
  {
    try {
      $sql = <<<SQL
      DELETE FROM endereco
      WHERE cep = ?
      LIMIT 1
      SQL;

      $stmt = $pdo->prepare($sql);
      $stmt->execute([$cep]);
    } catch (Exception $e) {
      exit('Falha inesperada: ' . $e->getMessage());
    }
  }
} 