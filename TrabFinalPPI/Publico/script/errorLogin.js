document.addEventListener("DOMContentLoaded", function () {
    let agendarBtn = document.querySelector("#logar");
    let email = document.querySelector("#email");
    let senha = document.querySelector("#password");    

    let span1 = document.querySelector("#span1");
    let span2 = document.querySelector("#span2");
    
   

    agendarBtn.addEventListener("click", () => {
        if (email.value === "") {
            let html = "Insira o email";
            span1.innerHTML = html;
        }
        if (senha.value === "") {
            let html1 = "Insira a senha";
            span2.innerHTML = html1;
        }
        if (email.value !== "" && senha.value !== "") {
           
            if (email.value === "exemplo@email.com" && senha.value === "senha123") {
                alert("Login bem-sucedido!"); 
            } else {
                alert("Login e/ou senha incorretos!"); 
            }
        }
    });
});