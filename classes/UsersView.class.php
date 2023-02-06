<?php

class UsersView extends Users
{

    public function loginUser($email, $password)
    {
        $user = $this->getUser($email, $password);

        session_start(); // start the user session
        $_SESSION["userid"] = $user->id;
        $_SESSION["name"] = $user->name;
        $_SESSION["email"] = $user->email;
    }

    public function getUserProfile($id)
    {
        return $this->userProfile($id);
    }
}
