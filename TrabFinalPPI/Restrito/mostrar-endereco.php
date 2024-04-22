<?php
require '../connection.php';
$pdo = getConnection();

try {
    $sql = <<<SQL
    SELECT * FROM endereco
    SQL;

    $stmt = $pdo->query($sql);
} catch (Exception $e) {
    exit('Ocorreu uma falha ao listar os agendamentos: ' . $e->getMessage());
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
    <title>Lista de endereco</title>
    
</head>

<body>
    <div id="header"></div>
    <div id="conteudo">
        <h2>
            Lista de Endereços
        </h2>
        <div class="table-responsive">
        <table class="table table-striped table-info table-hover">

            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">CEP</th>
                  <th scope="col">Logradouro</th>
                  <th scope="col">Cidade</th>
                  <th scope="col">Estado</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while($row = $stmt->fetch()){
                $rowNumber = htmlspecialchars($row['id']);
                $cep = htmlspecialchars($row['cep']);
                $log = htmlspecialchars($row['logradouro']);
                $cidade = htmlspecialchars($row['cidade']);
                $estado = htmlspecialchars($row['estado']);
                
                echo <<<HTML
                     <tr>
                     <th scope="row">$rowNumber</th>
                     <td>$cep</td>
                     <td>$log</td>
                     <td>$cidade</td>
                     <td>$estado</td>
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