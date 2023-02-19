<?php
session_start();

if (isset($_POST["submit"]) && isset($_SESSION["userid"])) {

    include '../../classes/Database.class.php';
    include '../../classes/Companies.class.php';
    include '../../classes/CompaniesController.class.php';

    // ToDo 
    // check entry

     $data = [
        // $name = $_POST["name"],
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS),
        // $trading_name = $_POST["trading_name"],
        $trading_name = filter_input(INPUT_POST, 'trading_name', FILTER_SANITIZE_SPECIAL_CHARS),
        $company_number = $_POST["company_number"],
        $ird_number = $_POST["ird_number"],
        $website = $_POST["website"],
        $email = $_POST["email"],
        $phone = $_POST["phone"],
        $industry_id = $_POST["industry_id"],
        $address_country_id = $_POST["address_country_id"],
        $address_city = $_POST["address_city"],
        $address_street = $_POST["address_street"],
        $address_building = $_POST["address_building"], 
        $address_zip = $_POST["address_zip"],
        $logo = $_POST["logo"],
        $motto = $_POST["motto"],
        $description = $_POST["description"],
        $id = $_SESSION["companyid"],
    ];
               
    $update = new CompaniesController();
    $update->updateCompany($data);

    header("location: /company");
}
