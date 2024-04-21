<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Clínica CTR - Agendamento de Consulta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/TrabFinalPPI/Publico/css/styleAgendConsult.css" type="text/css" media="screen">
</head>

<body>
    <div id="header"></div>
    <form name="cadastro" action="../Publico/php/agenda.php" method="POST">
        <div>
            <h2>Agendamento de Consulta</h2>
        </div>
        <div>
            <div><label for="especialidade">Especialidade Médica:</label>
                <select id="especialidade" name="especialidade" required>
                    <option value="">Selecione</option>
                    <?php
                       require '../connection.php';
                      
                       $pdo = getConnection();
                       $query = 'SELECT DISTINCT especialidade FROM medico';
                       $result = $pdo->query($query);
                       $rowCount = $result->rowCount();
                       if ($rowCount > 0) {
                           while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                               echo "<option value =". $row['especialidade'] .">" . $row['especialidade'] . "</option>";
                           }
                       } else {
                           echo "<option>Nenhuma especialidade encontrada</option>";
                       }
                       
 

                    ?>
                </select>
                <span id="span1"></span>
            </div>

            <div>
                <label for="medico">Nome do médico:</label>
                <select id="medico" name="medico" required>
                    
                </select>
                <span id="span2"></span>
            </div>

            <div>
                <label for="data">Data da Consulta:</label>
                <input type="date" id="data" name="data" required>
                <span id="span3"></span>
            </div>

            <div><label for="horario">Horário Disponível:</label>
                <select id="horario" name="horario" required>
                    
                </select>
                <span id="span4"></span>
            </div>

            <h3>Dados Pessoais:</h3>

            <div><label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Maria da Silva">
                <span id="span5"></span>
            </div>

            <div><label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="xxxxxx@xxx.xxx.xx" required>
                <span id="span6"></span>
            </div>

            <div><label for="sexo">Sexo:</label>

                <div class="inline"><input type="radio" id="sexom" name="sexo" value="masculino" required>
                    <label for="sexom">Masculino</label>
                </div>

                <div class="inline"><input type="radio" id="sexof" name="sexo" value="feminino" required>
                    <label for="sexof">Feminino</label>
                </div>
                <span id="span7"></span>
            </div>

            <div><input type="submit" value="Agendar" id="agendar"></div>

        </div>

    </form>

    <div id="footer"></div>
    <script src="/TrabFinalPPI/styleGlobal/footerAndHeader.js"> </script>
    <script src="/TrabFinalPPI/Publico/script/errorMessage.js"></script>
    <script src="../Publico/script/jsonMedicos.js"></script>



</body>

</html>