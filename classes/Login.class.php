<?php


class Login extends Database
{

    protected function getUser($email, $pwd)
    {

        $stmt = $this->connect()->prepare('SELECT password FROM users WHERE email = ? AND password = ?;');

        if (!$stmt->execute(array($email, $pwd))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed[0]['password']);
        if ($checkPwd == false) {
            $stmt = null;
            header("location: ../index.php?error=wrongpassword");
            exit();
        }

        $stmt = $this->connect()->prepare('SELECT p* FROM users WHERE email = ? AND password = ?;');

        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION["email"] = $user["email"];
        $_SESSION["name"] = $user["name"];
        $stmt = null;
    }
}
