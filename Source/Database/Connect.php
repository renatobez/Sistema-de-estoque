<?php

namespace Source\Database;
use \PDO;
use \PDOException;

class Connect
{
    private const HOST = "localhost";
    private const USER = "root";
    private const DBNAME = "stock";
    private const PASSWD = "11803221";

    private const OPTIONS = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ATTR_ERRMODE,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO:: ATTR_CASE => PDO::CASE_NATURAL
    ];

    private static $instance;

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            try {
                self::$instance = new PDO(
                    "mysql:host" . self::HOST . "dbname" . self::DBNAME,
                    "root" . self::USER,
                    "" . self::PASSWD,
                    self::OPTIONS

                );
            } catch (PDOException $error) {
                die("<p> Erro ao conectar com o banco de dados:</p>");
                var_dump($error);
            }
        }
        return self::$instance;
    }

    final private function __construct()
    {

    }
}
