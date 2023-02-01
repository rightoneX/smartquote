<?php


class Signup extends Database{

    protected function checkUser($name, $email){
        $stmt = $this->connect()->prepare('SELECT id FROM users WHERE name = ? AND email = ?;');
        if(!$stmt->execute(array($name, $email))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $resultCheck;
        if($stmt->rowCount() > 0 ){
            $resultCheck = false;
        }else {
            $resultCheck = true;
        }
        return $resultCheck;
    }

    protected function setUser($name, $pwd, $email){

        $stmt = $this->connect()->prepare('INSERT INTO users (name, password, email ) VALUES (?, ?, ?);');
        $hashedPWD = password_hash($pwd, PASSWORD_DEFAULT);
        if(!$stmt->execute(array($name, $hashedPWD, $email))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
       $last_id = mysqli_insert_id($stmt);
       $stmt = null;
       return true;
    }
}
