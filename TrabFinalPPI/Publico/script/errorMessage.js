document.addEventListener("DOMContentLoaded", function () {
    let agendarBtn = document.querySelector("#agendar");
    let especialidade = document.querySelector("#especialidade");
    let medico = document.querySelector("#medico");
    let data = document.querySelector("#data");
    let horario = document.querySelector("#horario");
    let nome = document.querySelector("#nome");
    let email = document.querySelector("#email");
    let sexom = document.querySelector("#sexom");
    let sexof = document.querySelector("#sexof");

    let span1 = document.querySelector("#span1");
    let span2 = document.querySelector("#span2");
    let span3 = document.querySelector("#span3");
    let span4 = document.querySelector("#span4");
    let span5 = document.querySelector("#span5");
    let span6 = document.querySelector("#span6");
    let span7 = document.querySelector("#span7");


    agendarBtn.addEventListener("click", () => {
        if (especialidade.value === "") {
            let html = "Selecione uma especionalidade";
            span1.innerHTML = html;
        }
        if (medico.value === "") {
            let html1 = "Selecione um médico";
            span2.innerHTML = html1;
        }
        if (data.value === "") {
            let html2 = "Selecione uma data";
            span3.innerHTML = html2;
        }
        if (horario.value === "") {
            let html3 = "Selecione um horário";
            span4.innerHTML = html3;
        }
        if (nome.value === "") {
            let html4 = "Insira seu nome";
            span5.innerHTML = html4;
        }
        if (email.value === "") {
            let html5 = "Insira seu email";
            span6.innerHTML = html5;
        }
        if (!sexom.checked && !sexof.checked) {
            let html6 = "Selecione um sexo";
            span7.innerHTML = html6;
        }
    });
});