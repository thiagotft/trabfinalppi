async function buscaEndereco(cep) {   
    if (cep.length != 9) return;

    try {
        let response = await fetch("php/busca-endereco.php?cep=" + cep);
      if (!response.ok) throw new Error(response.statusText);
      var endereco = await response.json();
    }
    catch (e) {
      console.error(e);
      return;
    }

    let form = document.querySelector("form");
    form.logradouro.value = endereco.logradouro;
    form.cidade.value = endereco.cidade;
    form.estado.value = endereco.estado;
  }

  window.onload = function () {
    const inputCep = document.querySelector("#cep");
    inputCep.onkeyup = () => buscaEndereco(inputCep.value);
  }



