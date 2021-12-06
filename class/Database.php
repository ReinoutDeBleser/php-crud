<?php

require_once 'EnvLoader.php';

class Database
{
    private static function con() {
        $env = new EnvLoader();
        $env->load();
        $host = getenv('DB_HOST');
        $dbname =  getenv('DB_NAME');
        $username =  getenv('DB_USERNAME');
        $password =  getenv('DB_PASSWORD');
        $pdo = new PDO("mysql:host=" . $host. ";dbname=" . $dbname . ";charset=utf8", $username, $password);//        $pdo = new PDO("mysql:host=" . $host. ";dbname=" . $dbname . ";charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    public static function query($query, $params = array()) {
        $stmt = self::con()->prepare($query);
        $stmt->execute($params);
        $data = $stmt->fetchAll();
        return $data;
    }

}
