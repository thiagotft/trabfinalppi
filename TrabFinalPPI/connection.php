<?php

function getConnection() {
    $servername = "sql205.infinityfree.com";
    $username = "if0_35771734";
    $password = "D0YKLr0cLUh";
    $dbname = "if0_35771734_trabalhofinalppi";
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