<?php
require "TrabFinalPPI/connection.php";

$acao = $_GET['acao'];

$pdo = getConnection();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = <<<SQL
            SELECT f.SenhaHash, p.Email
            FROM Funcionário f
            JOIN Pessoa p ON f.PessoaId = p.Id
            WHERE p.Email = ?
            SQL;
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);

    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $storedHash = $row['SenhaHash'];
        
        if (password_verify($password, $storedHash)) {
  
            echo json_encode(['status' => 'success', 'message' => 'Login realizado com sucesso.']);
        } else {

            echo json_encode(['status' => 'error', 'message' => 'Senha incorreta.']);
        }
    } else {

        echo json_encode(['status' => 'error', 'message' => 'Usuário não encontrado.']);
    }
}
?>
