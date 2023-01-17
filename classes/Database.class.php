<?php

class Database
{
 
    private $connection = null;

    private $host = "localhost:3306";
    private $user = "root";
    private $pwd = "password";
    private $dbname = "users";


    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->host . '; dbname=' . $this->dbname;
        // $pdo = 'ok';
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }

    // public function __construct($dbhost = "localhost:3306", $dbname = "users", $username = "root", $password = "password")
    // {
    //     try {

    //         $this->connection = new PDO("mysql:host={$dbhost};dbname={$dbname};", $username, $password);
    //         $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //         $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    //     } catch (Exception $e) {
    //         throw new Exception($e->getMessage());
    //     }
    // }

    // Insert a row/s in a Database Table
    public function insert($statement = "", $parameters = [])
    {
        try {

            $this->executeStatement($statement, $parameters);
            return $this->connection->lastInsertId();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function select($statement = "", $parameters = [])
    {
        try {

            $stmt = $this->executeStatement($statement, $parameters);
            return $stmt->fetchAll();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function update($statement = "", $parameters = [])
    {
        try {

            $this->executeStatement($statement, $parameters);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function remove($statement = "", $parameters = [])
    {
        try {

            $this->executeStatement($statement, $parameters);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    private function executeStatement($statement = "", $parameters = [])
    {
        try {

            $stmt = $this->connection->prepare($statement);
            $stmt->execute($parameters);
            return $stmt;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
