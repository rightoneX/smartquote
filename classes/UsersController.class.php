<?php

class UsersController extends Users{

    public function createUser($name, $password, $email){
        $this->setUser($name, $password, $email);
    }
}