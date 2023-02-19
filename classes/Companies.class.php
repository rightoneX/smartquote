<?php

class Companies extends Database
{
    protected function get($id)
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


    protected function update($data)
    {
        $sql = "UPDATE 
                    companies 
                SET  
                    name = ?, 
                    trading_name = ?, 
                    company_number = ?,  
                    ird_number = ?, 
                    website = ?,  
                    email = ?, 
                    phone = ?, 
                    industry_id = ?, 
                    address_country_id = ?, 
                    address_city = ?,
                    address_street = ?, 
                    address_building = ?,  
                    address_zip = ?, 
                    logo = ?,  
                    motto = ?, 
                    description = ? 
                WHERE 
                    id = ?";

        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute($data)) {
            $stmt = null;
            header("location: ../index.php?error=profilenotupdated");
            exit();
        }
        $stmt = null;
        return true;
    }

    protected function create($data)
    {
        $sql = "INSERT INTO companies 
        (`name`,
         `trading_name`,
          `company_number`,
           `ird_number`, 
           `website`, 
           `email`, 
           `phone`, 
           `industry_id`, 
           `address_country_id`, 
           `address_city`, 
           `address_street`, 
           `address_building`, 
           `address_zip`, 
           `logo`, 
           `motto`, 
           `description`) VALUES 
           ('78', '987', '979', '9789', '987', '89798', 
           '98779', '978', '879', '8977', '897',
            '987', '987', '897', '987', '987');


        
        
        CREATE companies SET  name = ?, trading_name = ?, company_number = ?,  ird_number = ?, website = ?,  email = ?, phone = ?, industry_id = ?, address_country_id = ?, address_city = ?,address_street = ?, address_building = ?,  address_zip = ?, logo = ?,  motto = ?, description = ? WHERE id = ?";

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
