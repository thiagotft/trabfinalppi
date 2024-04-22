<?php
session_start();
require '../connection.php';

$pdo = getConnection();



$email = $_SESSION['email']; // ObtÃ©m o email do usuÃ¡rio logado
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Clínica CTR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/TrabFinalPPI/Publico/css/styleIndex.css" type="text/css" media="screen">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>

    <div id="header"></div>

    <div class="container">
        
            <article>
                <h2>Descrição</h2>
                <p>A Clínica CTR é uma instituição médica estabelecida para oferecer uma ampla gama de serviços de saúde de qualidade. Fundada com o compromisso de fornecer atendimento médico excepcional e cuidados especializados, a Clínica CTR se destaca como uma referência na cidade de Uberlândia e região.</p>
            </article>

            <article>
                <h2>Nossos Valores</h2>
                <ul>
                    <li>
                        Profissionalismo.
                    </li>
                    <li>
                        Respeito.
                    </li>
                    <li>
                        Responsabilidade Social.
                    </li>
        
                </ul>
            </article>
            <article>
                <h2>Curiosidades Sobre a Empresa</h2>
                <p>A Clínica CTR é uma entidade particular fundada no dia 14 de janeiro de 1999 pelo grupo de investidores estrangeiros</p>
            </article>
            <article>
                <h2>Contato</h2>
                <p><span class="material-symbols-outlined">mail</span><a href="ctr@gmail.com">E-mail</a></p>
                <p><span class="material-symbols-outlined">
                    person
                    </span><a href="#">Facebook</a></p>
                <p><span class="material-symbols-outlined">
                    call
                    </span><a href="34343434">Telefone</a></p>
            </article>
        
    </div>
    <div id="footer"></div>
    <script src="/TrabFinalPPI/styleGlobal/footerAndHeaderPrivate.js"></script>

</body>

</html>
