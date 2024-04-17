document.addEventListener("DOMContentLoaded", function () {
    let agendarBtn = document.querySelector("#cadastrar");
   
    let cep = document.querySelector("#cep");
    let logradouro = document.querySelector("#logradouro");
    let cidade = document.querySelector("#cidade");
    let estado = document.querySelector("#estado");

    let span1 = document.querySelector("#span1");
    let span2 = document.querySelector("#span2");
    let span3 = document.querySelector("#span3");
    let span4 = document.querySelector("#span4");

    agendarBtn.addEventListener("click", (event) => {
        let isEmpty = false;
        if (cep.value === "") {
            let html = "Insira o CEP";
            span1.innerHTML = html;
            isEmpty = true;
        }
        if (logradouro.value === "") {
            let html1 = "Insira o logradouro";
            span2.innerHTML = html1;
            isEmpty = true;
        }
        if (cidade.value === "") {
            let html2 = "Insira a cidade";
            span3.innerHTML = html2;
            isEmpty = true;
        }
        if (estado.value === "") {
            let html3 = "Insira o estado";
            span4.innerHTML = html3;
            isEmpty = true;
        }
        
        if(isEmpty) {
            event.preventDefault();
        }
    });
});
