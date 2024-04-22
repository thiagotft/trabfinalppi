<d?php
session_start();
require '../connection.php';

$pdo = getConnection();



$email = $_SESSION['email']; 

echo $email;

$sql = <<<SQL

    SELECT a.* 

    FROM agenda a

    JOIN medico m ON a.codigomedico = m.codigo

    JOIN funcionario f ON m.codigo = f.codigo

    JOIN pessoa p ON f.codigo = p.codigo

    WHERE p.email = :email

SQL;



$stmt = $pdo->prepare($sql);

$stmt->execute([':email' => $email]);

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

                  <th scope="col">Data</th>

                  <th scope="col">Horario</th>

                </tr>

              </thead>

              <tbody>

                <?php

                while($row = $stmt->fetch()){

                $rowNumber = htmlspecialchars($row['codigo']);

                $nome = htmlspecialchars($row['nome']);

                $sexo = htmlspecialchars($row['sexo']);

                $email = htmlspecialchars($row['email']);

                $data = htmlspecialchars($row['data_ag']);

                $dataFormatada = date('d/m/Y', strtotime($data)); 

                $horario = htmlspecialchars($row['horario']);



                echo <<<HTML

                     <tr>

                     <th scope="row">$rowNumber</th>

                     <td>$nome</td>

                     <td>$sexo</td>

                     <td>$email</td>

                     <td>$dataFormatada</td> 

                     <td>$horario</td>

                     <td>$codigoMedico</td>

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