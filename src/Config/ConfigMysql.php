<?php

namespace Wagner\Pi\Config;

use PDO;
use PDOException;

class ConfigMysql {
    private static $host = 'localhost';
    private static $dbname = 'note';
    private static $username = 'root';
    private static $password = '';

    public static function conect()
    {
        try {
            $pdo = new PDO("mysql:host=".ConfigMysql::$host.";dbname=".ConfigMysql::$dbname."", ConfigMysql::$username,ConfigMysql::$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro na conexão com o banco de dados: " . $e->getMessage());
        }
            return $pdo;
    }

}
