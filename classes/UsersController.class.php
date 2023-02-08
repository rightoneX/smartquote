<?php

class UsersController extends Users
{

    // public $name;
    // public $email;
    // public $password;

    public function createUser($name, $email, $password)
    {
        $this->setUser($name, $email, $password);
    }

    public function updateUser($data)
    {
        $result = $this->updateProfile($data);
        if($result){
            return true;
        }
        return false;
    }
}
