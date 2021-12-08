<?php

namespace App\Fram\Factory;

class PDOFactory{
    private static string $dsn = 'mysql:host=db;dbname=blog-db';
    private static string $user = "root";
    private static string $password = "example";
    public static $pdo;

    public static function getMysqlConnection()
    {
       if(empty(self::$pdo))
       {
           self::$pdo = new \PDO(self::$dsn,self::$user, self::$password);
       }
       return self::$pdo;


    }
////self::$dbtype . ':host=' . self::$host .';dbname=' . self::$dbname, self::$user, self::$password
}
