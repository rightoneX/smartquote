<?php

if(isset($_POST["submit"])){

    $password = $_POST["password"];
    $email = $_POST["email"];

    include '../../classes/Database.class.php';
    include '../../classes/Login.class.php';
    include '../../classes/LoginController.class.php';

    $login = new LoginController($email, $password);

    $login->getUser($email, $password);

    // show the current tasks 
    session_start();
    $_SESSION["userid"] = 56;
    
    header("location: /tasks"); 
}