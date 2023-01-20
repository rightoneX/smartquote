<?php

class SignupController extends Signup
{

    private $name;
    private $pwd;
    private $pwdRepeat;
    private $email;

    public function __construct($name, $pwd, $pwdRepeat, $email)
    {
        $this->name = $name;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }

    public function signupUser()
    {
        if ($this->emptyInput() == false) {
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if ($this->invalidname() == false) {
            header("location: ../index.php?error=username");
            exit();
        }
        if ($this->invalidEmail() == false) {
            header("location: ../index.php?error=email");
            exit();
        }
        if ($this->pwdMatch() == false) {
            header("location: ../index.php?error=passwordmatch");
            exit();
        }
        if ($this->nameTakenCheck() == false) {
            header("location: ../index.php?error=useroremailtaken");
            exit();
        }
        $this->setUser($this->name, $this->pwd, $this->email);
    }

    private function emptyInput()
    {
        $result;
        if (empty($this->name) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidname()
    {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->name)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail()
    {
        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch()
    {
        $result;
        if ($this->pwd != $this->pwdRepeat) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function nameTakenCheck()
    {
        $result;
        if (!$this->checkUser($this->name, $this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
