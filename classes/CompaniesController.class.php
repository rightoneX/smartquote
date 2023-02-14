<?php

class CompaniesController extends Companies
{

    // public function createCompany($name, $email, $password, $pwdRepeat)
    // {
    //     if (!$this->emptyInput($name, $email, $password)) {
    //         header("location: ../../login?emptyinput");
    //         exit();
    //     }
    //     if (!$this->invalidName($name)) {
    //         header("location: ../../login?username");
    //         exit();
    //     }
    //     if (!$this->invalidEmail($email)) {
    //         header("location: ../../login?email");
    //         exit();
    //     }
    //     if (!$this->pwdMatch($password, $pwdRepeat)) {
    //         header("location: ../../login?passwordmatch");
    //         exit();
    //     }

    //     $this->setUser($name, $email, $password);
    // }

    public function recordUpdate($data)
    {
        $result = $this->companyUpdate($data);
        if($result){
            return true;
        }
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
