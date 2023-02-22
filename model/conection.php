<?php
/*
 * Conexão com o banco de dados utilizando PDO
 */

$dsn = 'mysql:host=localhost;dbname=register_stock;charset=utf8';
$username = "root";
$pass = "11803221";

//bloco try(faça) para tratar erro de conexão
try {
    $pdo = new PDO($dsn, $username, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (PDOException $error){
    echo "<p> Falha ao tentar conectar ao banco de dados</p>";
    echo "$error";
}