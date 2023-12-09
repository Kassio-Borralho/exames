<?php

$host = "localhost";
$database = "db_exames";
$username = "root";
$password = "";


try {
    // Iniciar tentativa de conexao com o banco
    // string de conexao
    $conexao = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erro) {
    // Em caso de erro roda o que tem aqui
    echo "Nao foi possivel conectar como banco de dados, motivo: " . $erro;
}