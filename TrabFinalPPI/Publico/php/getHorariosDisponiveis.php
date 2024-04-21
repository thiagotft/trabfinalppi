<?php
header('Content-Type: application/json');

if (isset($_POST['data']) && isset($_POST['medico'])) {
    require "../../connection.php";
    $pdo = getConnection();
    
    $data = $_POST['data'];
    $codigoMedico = $_POST['medico'];
    
    $queryHorarios = 'SELECT horario FROM agenda WHERE codigomedico = :codMedico AND data_ag = :data';
    $statementHorarios = $pdo->prepare($queryHorarios);
    $statementHorarios->bindParam(':codMedico', $codigoMedico);
    $statementHorarios->bindParam(':data', $data);
    $statementHorarios->execute();
    
    $horariosDisponiveis = ['8:00:00', '9:00:00', '10:00:00', '11:00:00', '12:00:00', '13:00:00', '14:00:00', '15:00:00', '16:00:00', '17:00:00', '18:00:00'];
    while ($horario = $statementHorarios->fetch(PDO::FETCH_ASSOC)) {
        $index = array_search($horario['horario'], $horariosDisponiveis);
            if ($index !== false) {
                unset($horariosDisponiveis[$index]);
            }
        }       

    $horariosDisponiveis = array_values($horariosDisponiveis); 
    echo json_encode($horariosDisponiveis);
} else {
    echo json_encode(['error' => 'Parâmetros inválidos']);
}

