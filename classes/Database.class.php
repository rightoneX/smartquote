<?php

class Database
{

    private $connection = null;

    private $host = "localhost:3306";
    private $user = "root";
    // private $pwd = "password";
    private $pwd = "Password!";
    private $dbname = "squote";


    // public function __construct()
    // {
    //     try {
    //         $dsn = 'mysql:host=' . $this->host . '; dbname=' . $this->dbname;
    //         $pdo = new PDO($dsn, $this->user, $this->pwd);
    //         $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    //         return $pdo;
    //     } catch (PDOException $e) {
    //         //thow $error
    //         print "Error!: " . $e->getMessage() . "<br/";
    //         die();
    //     }
    // }

    public function connect()
    {
        try {
            $dbh = new PDO("mysql:host={$this->host};dbname={$this->dbname};", $this->user, $this->pwd);
            // $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $dbh;
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
            die();
        }
    }


// protected function connect(){
//     $dsn = 'mysql:host=' . $this->host. ';dbname=' . $this->dbname;
//     $pdo = new PDO($dsn, $this->user, $this->pwd);
//     $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//     return $pdo;
// }




    // // Insert a row/s in a Database Table
    // public function insert($statement = "", $parameters = [])
    // {
    //     try {

    //         $this->executeStatement($statement, $parameters);
    //         return $this->connection->lastInsertId();
    //     } catch (Exception $e) {
    //         throw new Exception($e->getMessage());
    //     }
    // }

    // public function select($statement = "", $parameters = [])
    // {
    //     try {

    //         $stmt = $this->executeStatement($statement, $parameters);
    //         return $stmt->fetchAll();
    //     } catch (Exception $e) {
    //         throw new Exception($e->getMessage());
    //     }
    // }

    // public function update($statement = "", $parameters = [])
    // {
    //     try {

    //         $this->executeStatement($statement, $parameters);
    //     } catch (Exception $e) {
    //         throw new Exception($e->getMessage());
    //     }
    // }

    // public function remove($statement = "", $parameters = [])
    // {
    //     try {

    //         $this->executeStatement($statement, $parameters);
    //     } catch (Exception $e) {
    //         throw new Exception($e->getMessage());
    //     }
    // }

    // private function executeStatement($statement = "", $parameters = [])
    // {
    //     try {

    //         $stmt = $this->connection->prepare($statement);
    //         $stmt->execute($parameters);
    //         return $stmt;
    //     } catch (Exception $e) {
    //         throw new Exception($e->getMessage());
    //     }
    // }
}
