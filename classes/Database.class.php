<?php

class Database
{
    private $host = "localhost:3306";
    private $user = "root";
    // private $pwd = "password";
    // private $pwd = "Password!";
    private $pwd = "pa55VorD!";
    private $dbname = "squote";

    protected function connect()
    {
        try {
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
            $pdo = new PDO($dsn, $this->user, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            return $pdo;
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
            die();
        }
    }
}
