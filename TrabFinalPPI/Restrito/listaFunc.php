 <?php
require '../connection.php';
$pdo = getConnection();
try {
  $sql = <<<SQL
  SELECT PE.codigo, PE.nome, PE.sexo, PE.email, PE.telefone, 
  PE.cep, PE.logradouro, PE.cidade, PE.estado, 
  FC.codigo, FC.dataContrato, FC.salario
  FROM Pessoa AS PE, Funcionario AS FC
  WHERE PE.codigo = FC.codigo
  SQL;
    $stmt = $pdo->query($sql);
} catch (Exception $e) {
    exit('Ocorreu uma falha ao listar os funcionários: ' . $e->getMessage());
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

    <title>Listagem de Funcionarios Cadastrados</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
  <title>Lista de Funcionários</title>

</head>

<body>
    <div id="header"></div>
    <div id="conteudo">
        <h2>
            Funcionarios cadastrados
        </h2>

      <table class="table table-striped table-info table-hover">
      <caption>
        Lista de dados dos funcionarios cadastrados
      </caption>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome Completo</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">CEP</th>
                    <th scope="col">Logradouro</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Início do Contrato</th>
                    <th scope="col">Salário</th>
                </tr>
            </thead>
      <tbody>
        <?php
        while($row = $stmt->fetch()){
          $rowNumber = htmlspecialchars($row['codigo']);;
          $nome = htmlspecialchars($row['nome']);
          $sexo = htmlspecialchars($row['sexo']);
          $email = htmlspecialchars($row['email']);
          $telefone = htmlspecialchars($row['telefone']);
          $cep = htmlspecialchars($row['cep']);
          $logradouro = htmlspecialchars($row['logradouro']);
          $cidade = htmlspecialchars($row['cidade']);
          $estado = htmlspecialchars($row['estado']);
          $dataContrato = htmlspecialchars($row['dataContrato']);
          $salario = htmlspecialchars($row['salario']);

          echo <<<HTML
            <tr>
            <th scope="row">$rowNumber</th>
            <td>$nome</td>
            <td>$sexo</td>
            <td>$email</td>
            <td>$telefone</td>
            <td>$cep</td>
            <td>$logradouro</td>
            <td>$cidade</td>
            <td>$estado</td>
            <td>$dataContrato</td>
            <td>$salario</td>
          </tr>
          HTML;
        }
        ?>
      </tbody>
    </table>
    <div id="footer"></div>
    <script src="/TrabFinalPPI/styleGlobal/footerAndHeaderPrivate.js"></script>
  </body>
</html>
