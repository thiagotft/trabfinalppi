document.addEventListener('DOMContentLoaded', function() {
    // Quando o valor do campo de seleção com id 'especialidade' mudar, execute a função anônima
    document.getElementById('especialidade').addEventListener('change', function() {
        // Armazene o valor atual do campo de seleção 'especialidade' na variável 'especialidade'
        var especialidade = this.value;
        // Crie um novo objeto XMLHttpRequest
        var xhr = new XMLHttpRequest();
        // Configure a solicitação
        xhr.open('POST', 'jsonMedicos.php', true);
        // Defina o cabeçalho da solicitação para enviar dados de formulário
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        // Uma função a ser chamada quando a solicitação for bem-sucedida
        xhr.onload = function() {
            if (this.status == 200) {
                // Parse a resposta JSON
                var response = JSON.parse(this.responseText);
                // Limpe o campo de seleção 'medico'
                var medicoSelect = document.getElementById('medico');
                medicoSelect.innerHTML = '';
                // Para cada médico na resposta
                for (var i = 0; i < response.length; i++) {
                    // Armazene o nome do médico na variável 'nome'
                    var nome = response[i]['nome'];
                    // Crie uma nova opção
                    var option = document.createElement('option');
                    option.value = nome;
                    option.text = nome;
                    // Adicione a nova opção ao campo de seleção 'medico'
                    medicoSelect.add(option);
                }
            }
        };
        // Envie a solicitação com a especialidade selecionada
        xhr.send('especialidade=' + especialidade);
    });
});

