<?php

require '../../connection.php';

$pdo = getConnection();

session_start();

$email = $_POST['email'];

$password = $_POST['password'];


$_SESSION['email']= $email
$_SESSION['passoword'] = $password;



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

	header ("Location: ../../Restrito/index.html");

    } else {
	header ("Location: ../../Publico/login.html");

    }

} else {   
	header ("Location: ../../Publico/login.html");

}



?>