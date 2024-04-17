<?php
require '../connection.php';
$pdo = getConnection();
try {
  $sql = <<<SQL
  SELECT cep, logradouro, cidade, estado
  FROM endereco
  LIMIT 30
  SQL;
    $stmt = $pdo->query($sql);
} catch (Exception $e) {
    exit('Ocorreu uma falha ao listar os endereços: ' . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <title>Listagem de Endereços Cadastrados</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
  <title>Lista de Endereços</title>

</head>

<body>
    <div id="header"></div>
    <div id="conteudo">
        <h3>Endereços Cadastrados</h3>
        <div class="table-responsive">
        <table class="table table-striped table-hover">
          <tr>
            <th></th>
            <th>CEP</th>
            <th>Logradouro</th>
            <th>Cidade</th>
            <th>Estado</th>
          </tr>
          <?php
          while($row = $stmt->fetch()){
            $cep = htmlspecialchars($row['cep']);
            $logradouro = htmlspecialchars($row['logradouro']);
            $cidade = htmlspecialchars($row['cidade']);
            $estado = htmlspecialchars($row['estado']);

            echo <<<HTML
              <tr>
              <th scope="row"></th>
              <td>$cep</td>
              <td>$logradouro</td>
              <td>$cidade</td>
              <td>$estado</td>
            </tr>
            HTML;
          }
          ?>
        </table>
        </div>
    <div id="footer"></div>
    <script src="/TrabFinalPPI/styleGlobal/footerAndHeaderPrivate.js"></script>
  </body>
</html>