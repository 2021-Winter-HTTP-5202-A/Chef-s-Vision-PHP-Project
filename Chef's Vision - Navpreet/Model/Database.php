<?php

class Database
{
    //properties
    private static $servername = "localhost";
    private static $user = 'root';
    private static $pass = 'root';
    private static $dsn = 'mysql:host=$servername;dbname=recipesDb';
    private static $conn;

    private function __construct()
    {
    }

    //get pdo connection
    public static function getDb(){
        if(!isset(self::$conn)) {
            try {
                self::$conn = new PDO(self::$dsn, self::$user, self::$pass);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch (PDOException $e) {
                $msg = $e->getMessage();
                include '../custom-error.php';
                exit();
            }
        }

        return self::$conn;
    }
}

