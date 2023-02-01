<?php

// namespace User;
 
class User{

    protected $firstName;
    protected $lastName;
    protected $login;
    protected $email;
    protected $password;


    public function __construct($firstName, $lastName) //$login, $email, $password
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getName(){
        return $this->firstName . " " . $this->lastName;
    }

    // public function setUser() {
    //     $this->firstName = $firstName;
    //     $this->lastName = $lastName;
    // }

}


?>