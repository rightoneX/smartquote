<?php

class CompaniesController extends Companies
{

    public function updateCompany($data)
    {
        $result = $this->update($data);
        if($result){
            return true;
        }
        return false;
    }

    public function createCompany($data)
    {
        $result = $this->create($data);
        if($result){
            return true;
        }
        return false;
        return false;
    }

    // private function emptyInput($name, $email, $password)
    // {
    //     $result = false;
    //     if (empty($password) || empty($email) || empty($name)) {
    //         $result = false;
    //     } else {
    //         $result = true;
    //     }
    //     return $result;
    // }

    // private function invalidName($name)
    // {
    //     $result = false;
    //     if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
    //         $result = false;
    //     } else {
    //         $result = true;
    //     }
    //     return $result;
    // }

    // private function invalidEmail($email)
    // {
    //     $result = false;
    //     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //         $result = false;
    //     } else {
    //         $result = true;
    //     }
    //     return $result;
    // }

    // private function pwdMatch($password, $pwdRepeat)
    // {
    //     $result = false;
    //     if ($password != $pwdRepeat) {
    //         $result = false;
    //     } else {
    //         $result = true;
    //     }
    //     return $result;
    // }
}
