<?php

class Login extends Database
{

    public function getUser($email, $password)
    {
        $stmt = $this->connect()->prepare('SELECT password FROM users WHERE email = ?;');

        if (!$stmt->execute(array($email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }

        $passwordHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $checkpassword = password_verify($password, $passwordHashed[0]['password']);


        if ($checkpassword == false) {
            $stmt = null;
            header("location: ../index.php?error=wrongpassword");
            exit();
        } elseif ($checkpassword == true) {

            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE email = ?;');
            $stmt->execute(array($email));
            $user = $stmt->fetchAll();

            session_start();
            $_SESSION["userid"] = $user[0]["id"];
            $_SESSION["name"] = $user[0]["name"];
            $_SESSION["email"] = $user[0]["email"];
            $_SESSION["surename"] = $user[0]["surename"];
            $_SESSION["position"] = $user[0]["position"];
            // var_dump($_SESSION["userid"]. " ". $_SESSION["name"] . " ".  $_SESSION["surename"] . " ". $_SESSION["position"]. " ". $_SESSION["email"]);
            // die();
            $stmt = null;
        }
    }
}
