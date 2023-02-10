<?php

class Companies extends Database
{
    protected function companyProfile($id)
    {
        // check if email already in use
        $sql = "SELECT * FROM companies WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute(array($id))) { // check if sql accept command
            $stmt = null;
            header("location: ../index.php?error= nocompayfound");
            exit();
        }
        $user = $stmt->fetch();
        $stmt = null;
        return $user; // return data
    }


}
