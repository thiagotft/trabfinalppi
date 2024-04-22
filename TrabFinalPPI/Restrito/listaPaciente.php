<?php
require '../connection.php';
$pdo = getConnection();

try {
    $sql = <<<SQL
    SELECT PE.codigo, PE.nome, PE.sexo, PE.email, PE.telefone, 
    PE.cep, PE.logradouro, PE.cidade, PE.estado, 
    PA.peso, PA.altura, PA.tipoSanguineo
    FROM pessoa AS PE, paciente AS PA
    WHERE PE.codigo = PA.codigo
    SQL;

    $stmt = $pdo->query($sql);
} catch (Exception $e) {
    exit('Ocorreu uma falha ao listar os pacientes: ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="/TrabFinalPPI/Restrito/css/styleList.css" type="text/css" media="screen">
    <title>Lista de Paciente</title>
    
</head>

<body>
    <div id="header"></div>
    <div id="conteudo">
        <h2>
            Lista de pacientes
        </h2>
        <div class="table-responsive">
        <table class="table table-striped table-info table-hover">

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
                  <th scope="col">Peso (kg)</th>
                  <th scope="col">Altura (cm)</th>
                  <th scope="col">Tipo Sanguíneo</th>
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
                  $peso = htmlspecialchars($row['peso']);
                  $altura = htmlspecialchars($row['altura']);
                  $tipoSanguineo = htmlspecialchars($row['tipoSanguineo']);
        
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
                    <td>$peso</td>
                    <td>$altura</td>
                    <td>$tipoSanguineo</td>
                  </tr>
                  HTML;
                }
                ?>
            </tbody>
        </table>
        </div>
    </div>
    <div id="footer"></div>
    <script src="/TrabFinalPPI/styleGlobal/footerAndHeaderPrivate.js"></script>
</body>

</html>