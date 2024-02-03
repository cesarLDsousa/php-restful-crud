<?php

namespace App\Core;

class Model 
{
    private static $connection;

    public static function getConn()
    {
        $host = $_ENV["database_host"];
        $user = $_ENV["database_user"];
        $password = $_ENV["database_pass"];

        if(!isset(self::$connection)){
            self::$connection = new \PDO("mysql:host=$host;port=3306;dbname=dbfastparking;", $user, $password);
        }

        return self::$connection;
    }
}