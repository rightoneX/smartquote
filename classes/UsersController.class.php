<?php

class UsersController extends Users
{

    public $name;
    public $email;
    public $password;

    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function createUser()
    {
        $this->setUser($this->name, $this->email, $this->password);
    }
}
