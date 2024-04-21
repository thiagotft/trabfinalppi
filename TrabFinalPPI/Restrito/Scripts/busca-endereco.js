async function buscaEndereco(cep) {   
    if (cep.length != 9) return;

    try {
        let response = await fetch("../busca-endereco.php?cep=" + cep);
        if (!response.ok) throw new Error(response.statusText);
        var endereco = await response.json();
    }
    catch (e) {
        console.error(e);
        return;
    }

    let form = document.querySelector("form");
    form.inputLogradouro.value = endereco.rua;
    form.inputCidade.value = endereco.cidade;
    form.inputEstado.value = endereco.estado;
}

window.onload = function () {
    const inputCep = document.querySelector("#inputCep");
    inputCep.onkeyup = () => buscaEndereco(inputCep.value);
}



