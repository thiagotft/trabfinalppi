fetch('/TrabFinalPPI/Parte1/styleGlobal/header.html')
.then(response => response.text())
.then(data => document.getElementById('header').innerHTML = data);

fetch('/TrabFinalPPI/Parte1/styleGlobal/footer.html')
.then(response => response.text())
.then(data => document.getElementById('footer').innerHTML = data);