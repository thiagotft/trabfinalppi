<?php
require '../connection.php';
$pdo = getConnection();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="/TrabFinalPPI/Restrito/css/styleCad.css" type="text/css" media="screen">
    <title>Cadastro Funcionário</title>
</head>

<body>
    <div id="header"></div>

    <div id="conteudo">
    <form
        action="../Restrito/cadastraFuncionario.php"
        method="POST"
        id="form"
        class="px-5 pb-5"
      >
        <div class="form-group">
          <label for="inputNome">Nome</label>
          <input
            type="text"
            class="form-control"
            id="inputNome"
            placeholder="Digite o nome completo"
            name="inputNome"
            required
          />
        </div>

        <div class="form-group">
          <label for="inputSexo">Sexo</label>
          <select id="inputSexo" class="form-control" name="inputSexo" required>
            <option selected>Escolher...</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outro">Outro</option>
            <option value="Prefiro não informar">Prefiro não informar</option>
          </select>
        </div>

        <div class="form-group">
          <label for="inputEmail">Email</label>
          <input
            type="email"
            class="form-control"
            id="inputEmail"
            placeholder="Digite o email"
            name="inputEmail"
            required
          />
        </div>

        <div class="form-group">
          <label for="inputTelefone">Telefone</label>
          <input
            type="tel"
            class="form-control"
            id="inputTelefone"
            placeholder="Digite o telefone de contato"
            name="inputTelefone"
            required
          />
        </div>

        <div class="form-group">
          <label for="inputCep">CEP</label>
          <input
            type="text"
            class="form-control"
            id="inputCep"
            placeholder="Digite o CEP"
            name="inputCep"
            required
          />
        </div>

        <div class="form-group">
          <label for="inputLogradouro">Logradouro</label>
          <input
            type="text"
            class="form-control"
            id="inputLogradouro"
            name="inputLogradouro"
            required
          />
        </div>

        <div class="form-group">
          <label for="inputCidade">Cidade</label>
          <input
            type="text"
            class="form-control"
            id="inputCidade"
            name="inputCidade"
            required
          />
        </div>

        <div class="form-group">
          <label for="inputEstado">Estado</label>
          <input
            type="text"
            class="form-control"
            id="inputEstado"
            name="inputEstado"
            required
          />
        </div>

        <div class="form-group">
          <label for="inputDataContrato">Início do contrato</label>
          <input
            type="date"
            class="form-control"
            id="inputDataContrato"
            name="inputDataContrato"
            required
          />
        </div>

        <div class="form-group">
          <label for="inputSalario">Salário</label>
          <input
            type="text"
            class="form-control"
            id="inputSalario"
            placeholder="Digite o salário"
            name="inputSalario"
            required
          />
        </div>

        <div class="form-group">
          <label for="inputSenha">Senha</label>
          <input
            type="password"
            class="form-control"
            id="inputSenha"
            name="inputSenha"
            required
          />
        </div>

        <div class="form-group form-check">
        <input type="hidden" name="isMedico" value="off">
  <input type="checkbox" class="form-check-input" id="isMedico" name="isMedico" value="on" onchange="checkIsMedico()">
          <label class="form-check-label" for="isMedico">Médico</label>
        </div>

        <div id="medicForms" style="display: none">
          <div class="form-group">
            <label for="inputEspecialidade">Especialidade</label>
            <input
              type="text"
              class="form-control"
              id="inputEspecialidade"
              placeholder="Digite a especialidade"
              name="inputEspecialidade"
            />
          </div>

          <div class="form-group">
            <label for="inputCrm">CRM</label>
            <input
              type="text"
              class="form-control"
              id="inputCrm"
              placeholder="Digite o CRM"
              name="inputCrm"
            />
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>


    </div>

    <div id="footer"></div>
    <script src="/TrabFinalPPI/Restrito/Scripts/checkMedico.js"></script>
    <script src="/TrabFinalPPI/styleGlobal/footerAndHeaderPrivate.js"></script>
    <script src="/TrabFinalPPI/Restrito/Scripts/errorMessageCadFunc.js"></script>
</body>
<script>

    function checkIsMedico() {
  var checkboxMedico = document.getElementById('checkboxMedico');
  var inputEspecialidade = document.getElementById('inputEspecialidade');
  var inputCrm = document.getElementById('inputCrm');
  var medicForms = document.getElementById('medicForms');
  var medicActionPhp = document.getElementById('medicActionPhp');

  if (checkboxMedico.checked) {
    inputEspecialidade.required = true;
    inputCrm.required = true;
    medicForms.style["display"] = "";
    medicActionPhp.action = "../TrabFinalPPI/Restrito/cadastroMedico.php";
  } else {
    inputEspecialidade.required = false;
    inputCrm.required = false;
    medicForms.style["display"] = "none";
    medicActionPhp.action = "../TrabFinalPPI/Restrito/cadastroFuncionario.php";
  }
}
  </script>

</html>