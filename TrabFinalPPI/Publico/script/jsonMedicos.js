document.getElementById('especialidade').addEventListener('change', function() {
    var especialidade = this.value;
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../Publico/php/getMedicosByEspecialidade.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var medicoSelect = document.getElementById('medico');
            var response = JSON.parse(xhr.responseText);
            medicoSelect.innerHTML = '<option value="">Selecione</option>';
            response.forEach(function(medico) {
                medicoSelect.innerHTML += '<option value="' + medico.codigo + '">' + medico.nome + '</option>';
            });
        }
    };
    xhr.send('especialidade=' + encodeURIComponent(especialidade));
});



document.getElementById('data').addEventListener('change', function() {
    var data = this.value;
    console.log(data);
    var medico = parseInt(document.getElementById('medico').value);

    console.log(medico);
    if (data && medico) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../Publico/php/getHorariosDisponiveis.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var horarioSelect = document.getElementById('horario');
                var response = JSON.parse(xhr.responseText);
                console.log("XHR: " + xhr.responseText);
                console.log('Resposta: ' + response.horario);
                
                horarioSelect.innerHTML = '<option value="">Selecione</option>';
                response.forEach(function(horario) {
                    horarioSelect.innerHTML += '<option value="' + horario + '">' + horario + '</option>';
                });
            }
        };
        xhr.send('data=' + encodeURIComponent(data) + '&medico=' + encodeURIComponent(medico));

    }
});
