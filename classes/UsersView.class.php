<?php

class UsersView extends Users
{

    // public $email;
    // public $password;

    // public function __construct()
    // {
        // $this->email = $email;
        // $this->password = $password;
    // }

    public function loginUser($email, $password)
    {
        $user = $this->getUser($email, $password);
        // start the user session
        session_start();
        $_SESSION["userid"] = $user->id;
        $_SESSION["name"] = $user->name;
        $_SESSION["email"] = $user->email;
    }

    public function profileUser($id)
    {
        $user = $this->profileUserData($id);
        // var_dump($user);
        // die();
        return $user;
    }

    // public function showUser(){
    //     $results = $this->getUser($this->email, $this->password);
    //     echo "Full name: ". $results['name'];
    // }

}
