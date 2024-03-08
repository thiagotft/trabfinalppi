document.addEventListener("DOMContentLoaded", function () {
    let submitBtn = document.querySelector("button[type='submit']");
    let inputNome = document.querySelector("#inputNome");
    let inputSexo = document.querySelector("#inputSexo");
    let inputEmail = document.querySelector("#inputEmail");
    let inputTelefone = document.querySelector("#inputTelefone");
    let inputCep = document.querySelector("#inputCep");
    let inputLogradouro = document.querySelector("#inputLogradouro");
    let inputCidade = document.querySelector("#inputCidade");
    let inputEstado = document.querySelector("#inputEstado");
    let inputDataContrato = document.querySelector("#inputDataContrato");
    let inputSalario = document.querySelector("#inputSalario");
    let inputSenha = document.querySelector("#inputSenha");
    let isMedico = document.querySelector("#isMedico");
    let inputEspecialidade = document.querySelector("#inputEspecialidade");
    let inputCrm = document.querySelector("#inputCrm");

    let span0 = document.querySelector("#span0");
    let span1 = document.querySelector("#span1");
    let span2 = document.querySelector("#span2");
    let span3 = document.querySelector("#span3");
    let span4 = document.querySelector("#span4");
    let span5 = document.querySelector("#span5");
    let span6 = document.querySelector("#span6");
    let span7 = document.querySelector("#span7");
    let span8 = document.querySelector("#span8");
    let span9 = document.querySelector("#span9");
    let span10 = document.querySelector("#span10");
    let span11 = document.querySelector("#span11");
    let span12 = document.querySelector("#span12");

    submitBtn.addEventListener("click", () => {

        if (inputNome.value === "") {
            let html0 = "Insira seu nome";
            span0.innerHTML = html0;
        }
        if (inputSexo.value === "Escolher...") {
            let html1 = "Selecione um sexo";
            span1.innerHTML = html1;
        }
        if (inputEmail.value === "") {
            let html2 = "Insira seu email";
            span2.innerHTML = html2;
        }
        if (inputTelefone.value === "") {
            let html3 = "Insira seu telefone";
            span3.innerHTML = html3;
        }
        if (inputCep.value === "") {
            let html4 = "Insira seu CEP";
            span4.innerHTML = html4;
        }
        if (inputLogradouro.value === "") {
            let html5 = "Insira seu logradouro";
            span5.innerHTML = html5;
        }
        if (inputCidade.value === "") {
            let html6 = "Insira sua cidade";
            span6.innerHTML = html6;
        }
        if (inputEstado.value === "") {
            let html7 = "Insira seu estado";
            span7.innerHTML = html7;
        }
        if (inputDataContrato.value === "") {
            let html8 = "Selecione o início do contrato";
            span8.innerHTML = html8;
        }
        if (inputSalario.value === "") {
            let html9 = "Insira seu salário";
            span9.innerHTML = html9;
        }
        if (inputSenha.value === "") {
            let html10 = "Insira sua senha";
            span10.innerHTML = html10;
        }
        if (isMedico.checked && inputEspecialidade.value === "") {
            let html11 = "Insira a especialidade (campo obrigatório para médicos)";
            span11.innerHTML = html11;
        }
        if (isMedico.checked && inputCrm.value === "") {
            let html12 = "Insira o CRM (campo obrigatório para médicos)";
            span12.innerHTML = html12;
        }
    });
});
