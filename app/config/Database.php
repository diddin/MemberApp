<?php


namespace app\config\singleton;


class Database implements IDatabase
{
    private static $conn;

    public function connect(): \PDO
    {
        $params = parse_ini_file("Database.ini");
        if($params === null) {
            throw new \Exception("Error Reading Database Configuration");
        }

        $pdo = new \PDO("mysql:host={$params['host']};dbname={$params['database']}",
            "{$params['user']}","{$params['password']}");
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }

    public static function get(): Database
    {
        if(static::$conn === null) {
            static::$conn = new static();
        }
        return static::$conn;
    }

    protected function __construct()
    {
        // TODO: Implement __clone() method
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

}