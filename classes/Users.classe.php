<?php 

class Users extends Database {


    protected function getUser($email) {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function setUser($email, $name, $password) {
        $sql = "INSERT INTO users(name, email, password) VALUES (?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email, $name, $password]);
    }
}