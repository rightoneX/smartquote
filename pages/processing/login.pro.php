<?php


if(isset($_POST["submit"])){

    $name = $_POST["name"];
    $email = $_POST["email"];

    include '../../classes/Database.class.php';
    include '../../classes/Login.class.php';
    include '../../classes/LoginController.class.php';


    $login = new LoginController($email, $pwd);

    $login->getUser($email, $pwd);

    header("location: ../../index.php?error=none");

}