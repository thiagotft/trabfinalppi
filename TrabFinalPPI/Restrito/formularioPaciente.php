<?php
require '../connection.php';
$pdo = getConnection();

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/TrabFinalPPI/Restrito/css/styleCad.css" type="text/css" media="screen">

    <title>Cadastro Paciente</title>
</head>

<body>
    <div id="header"></div>

    <div class="container col-md-8">
        <h1 class="text-primary text-center text-uppercase pt-4">Cadastro de pacientes</h1>

        
        <form action="../Restrito/cadastraPaciente.php" method="POST" id="form">
            <div class="form-group m-3">
                <label for="inputNome">Nome</label>
                <input type="text" class="form-control" id="inputNome" placeholder="Digite o nome completo"
                    name="inputNome" required />
                <span id="span0"></span>
            </div>

            <div class="form-group m-3">
                <label for="inputSexo">Sexo</label>
                <select id="inputSexo" class="form-control" name="inputSexo" required>
                    <option selected>Escolher...</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outro">Outro</option>
                    <option value="Prefiro não informar">Prefiro não informar</option>
                </select>
                <span id="span1"></span>
            </div>

            <div class="form-group m-3">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Digite o email" name="inputEmail"
                    required>
                <span id="span2"></span>
            </div>

            <div class="form-group m-3">
                <label for="inputTelefone">Telefone</label>
                <input type="tel" class="form-control" id="inputTelefone" placeholder="Digite o telefone de contato"
                    name="inputTelefone" required>
                <span id="span3"></span>
            </div>

            <div class="form-group m-3">
                <label for="inputCep">CEP</label>
                <input type="text" class="form-control" id="inputCep" placeholder="Digite o CEP" name="inputCep"
                    required>
                <span id="span4"></span>
            </div>

            <div class="form-group m-3">
                <label for="inputLogradouro">Logradouro</label>
                <input type="tel" class="form-control" id="inputLogradouro" name="inputLogradouro"
                    placeholder="Insira seu logradouro" required>
                <span id="span5"></span>
            </div>

            <div class="form-group m-3">
                <label for="inputCidade">Cidade</label>
                <input type="text" class="form-control" id="inputCidade" name="inputCidade" required
                    placeholder="Insira sua cidade">
                <span id="span6"></span>
            </div>

            <div class="form-group m-3">
                <label for="inputEstado">Estado</label>
                <input type="text" class="form-control" id="inputEstado" name="inputEstado" required
                    placeholder="Insira seu estado">
                <span id="span7"></span>
            </div>

            <div class="form-group m-3">
                <label for="inputPeso">Peso</label>
                <input type="number" class="form-control" id="inputPeso" placeholder="Peso (kg)" name="inputPeso"
                    required>
                <span id="span8"></span>
            </div>

            <div class="form-group m-3">
                <label for="inputAltura">Altura</label>
                <input type="number" class="form-control" id="inputAltura" placeholder="Altura (cm)" name="inputAltura"
                    required>
                <span id="span9"></span>
            </div>

            <div class="form-group m-3">
                <label for="inputTipoSanguineo">Tipo Sanguíneo</label>
                <select id="inputTipoSanguineo" class="form-control" name="inputTipoSanguineo" required>
                    <option selected>Escolher...</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="0-">O-</option>
                </select>
                <span id="span10"></span>
            </div>
            <div class="form-group m-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>

    <div id="footer"></div>

    <script src="/TrabFinalPPI/styleGlobal/footerAndHeaderPrivate.js"></script>
    <script src="/TrabFinalPPI/Restrito/Scripts/errorMessageCadPaci.js"></script>


</body>

</html>