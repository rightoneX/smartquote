<?php

class LoginController extends Login
{

    private $pwd;
    private $email;

    public function __construct($pwd, $email)
    {
        $this->pwd = $pwd;
        $this->email = $email;
    }

    public function loginUser()
    {
        if ($this->emptyInput() == false) {
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        $this->getUser( $this->pwd, $this->email);
    }

    private function emptyInput()
    {
        $result;
        if (empty($this->pwd) || empty($this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

}
