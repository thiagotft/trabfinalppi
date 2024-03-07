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
    let inputPeso = document.querySelector("#inputPeso");
    let inputAltura = document.querySelector("#inputAltura");
    let inputTipoSanguineo = document.querySelector("#inputTipoSanguineo");

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
        if (inputPeso.value === "") {
            let html8 = "Insira seu peso";
            span8.innerHTML = html8;
        }
        if (inputAltura.value === "") {
            let html9 = "Insira sua altura";
            span9.innerHTML = html9;
        }
        if (inputTipoSanguineo.value === "Escolher...") {
            let html10 = "Selecione um tipo sanguíneo";
            span10.innerHTML = html10;
        }
    });
});
