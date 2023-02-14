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
        $companies = $stmt->fetch();
        $stmt = null;
        return $companies;
    }


    protected function companyUpdate($data)
    {
        
        $sql = "UPDATE companies SET  name = ?, trading_name = ?, company_number = ?,  ird_number = ?, website = ?,  email = ?, phone = ?, industry_id = ?, address_country_id = ?, address_city = ?,address_street = ?, address_building = ?,  address_zip = ?, logo = ?,  motto = ?, description = ? WHERE id = ?";


        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute($data)) {
            $stmt = null;
            header("location: ../index.php?error=profilenotupdated");
            exit();
        }
        $stmt = null;
        return true;
    }

}
