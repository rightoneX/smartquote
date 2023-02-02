<?php

class Users extends Database
{


    protected function getUser($email, $password)
    {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute([$email])) { // check if sql accept command
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) { // check if email in db
            $stmt = null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }

        $passwordHashed = $stmt->fetch();
        $checkpassword = password_verify($password, $passwordHashed->password);

        if ($checkpassword == false) { // wrong password

            $stmt = null;
            header("location: ../index.php?error=wrongpassword");
            exit();
        } elseif ($checkpassword == true) { // password is correct

            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE email = ?');
            $stmt->execute(array($email));
            $user = $stmt->fetch();
            $stmt = null;
            return $user; // return user data
        }
    }

    protected function setUser($name, $email, $password)
    {
        // check if email already in use
        $sql = "SELECT email FROM users WHERE email = ?";
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute(array($email))) { // check if sql accept command
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() > 0) { // check if the email already in the db
            $stmt = null;
            header("location: ../index.php?error=emailtaken");
            exit();
        }
        // if all good, let's creat new account
        $sql = "INSERT INTO users(name, email, password) VALUES (?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $email,  password_hash($password, PASSWORD_DEFAULT)]);
    }

    protected function profileUserData($id)
    {
        // check if email already in use
        $sql = "SELECT * FROM users WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute(array($id))) { // check if sql accept command
            $stmt = null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }
        $user = $stmt->fetch();
        $stmt = null;
        return $user; // return user data
    }
}
