<?php
include 'db.php';

$especialidade = $_POST['especialidade'];

$sql = "SELECT p.nome
FROM medico m
JOIN funcionario f ON m.codigo = f.codigo
JOIN pessoa p ON f.codigo = p.codigo
WHERE m.especialidade = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $especialidade);
$stmt->execute();
$result = $stmt->get_result();

$medicos = array();
while ($row = $result->fetch_assoc()) {
    $medicos[] = $row;
}

echo json_encode($medicos);

