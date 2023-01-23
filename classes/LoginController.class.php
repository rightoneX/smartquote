<?php

class LoginController extends Login
{

    private $password;
    private $email;

    public function __construct($email, $password)
    {
        $this->password = $password;
        $this->email = $email;
    }

    public function loginUser()
    {
        if ($this->emptyInput() == false) {
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        $this->getUser($this->email, $this->password);
    }

    private function emptyInput()
    {
        $result;
        if (empty($this->password) || empty($this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

}
