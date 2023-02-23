<?php

/*
 * Conexão com o banco
 */



//tratando erro

try {
    $conn = new PDO(
        "mysql:hostname=localhost;dbname=stock",
        "root",
        "11803221"
    );

} catch (PDOException $error) {
    var_dump($error);
}