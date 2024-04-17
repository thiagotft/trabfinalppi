<?php

function getConnection() {
    $servername = "sql213.infinityfree.com";
    $username = "if0_36383014";
    $password = "jxoM22zjUCdK";
    $dbname = "if0_36383014_clinicactr";
    $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8mb4"; // Cria a string DSN
    $options = [
        PDO::ATTR_EMULATE_PREPARES => false, // desativa a execução emulada de prepared statements
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // ativa o modo de erros para lançar exceções    
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // altera o modo padrão do método fetch para FETCH_ASSOC
    ];

    try {
        $pdo = new PDO($dsn, $username, $password, $options);
        return $pdo;
    } catch (Exception $e) {
        exit('Ocorreu uma falha na conexão com o BD: ' . $e->getMessage());
    }
}
?>