<?php

class Industries extends Database
{
    protected function industryInformation($code)
    {
        // check if email already in use
        $sql = "SELECT * FROM industries WHERE code = ?";
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute(array($code))) { // check if sql accept command
            $stmt = null;
            header("location: ../index.php?error= nodatafound");
            exit();
        }
        $user = $stmt->fetch();
        $stmt = null;
        return $user; // return data
    }


}
