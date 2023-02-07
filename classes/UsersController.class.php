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

    public function updateUser($id, $name, $surename, $position)
    {
        $result = $this->updateProfile($id, $name, $surename, $position);
        if($result){
            return true;
        }
        return false;
    }
}
