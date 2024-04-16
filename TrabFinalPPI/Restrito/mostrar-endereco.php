<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/TrabFinalPPI/Restrito/css/styleList.css" type="text/css" media="screen">
    <title>Lista de Enderecos</title>
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
      foreach ($arrayEnderecos as $endereco) {
        echo <<<HTML
          <tr>
            <td><a href="/TrabFinalPPI/Publico/php/controlador-enderecos.php?acao=excluirEndereco&cep=$endereco->cep">Excluir</a></td> 
            <td>$endereco->cep</td> 
            <td>$endereco->logradouro</td>
            <td>$endereco->cidade</td>
            <td>$endereco->estado</td>
          </tr>      
        HTML;
      }
      ?>

    </table>
    </div>
    </div>
    <div id="footer"></div>
    <script src="/TrabFinalPPI/styleGlobal/footerAndHeaderPrivate.js"></script>
</body>

</html>