<?php
require '../connection.php';
$pdo = getConnection();

$email = $_POST['email'];
$password = $_POST['password'];

$sql = <<<SQL
    SELECT f.senhahash
    FROM funcionario f
    JOIN pessoa p ON f.codigo = p.codigo
    WHERE p.email = :email
SQL;

$stmt = $pdo->prepare($sql);
$stmt->execute([':email' => $email]);

if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $storedHash = $row['senhahash'];
    
    if (password_verify($password, $storedHash)) {
        echo "Login realizado com sucesso.";
    } else {
        echo "Senha incorreta.";
    }
} else {
    echo "Usuário não encontrado.";
}
?>