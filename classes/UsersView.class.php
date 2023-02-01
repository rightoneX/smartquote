<?php

class UsersView extends Users
{

    public $email;
    public $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function loginUser()
    {
        $user = $this->getUser($this->email, $this->password);
        // start the user session
        session_start();
        $_SESSION["userid"] = $user[0]["id"];
        $_SESSION["name"] = $user[0]["name"];
        $_SESSION["email"] = $user[0]["email"];
    }


    // public function showUser(){
    //     $results = $this->getUser($this->email, $this->password);
    //     echo "Full name: ". $results['name'];
    // }

}
