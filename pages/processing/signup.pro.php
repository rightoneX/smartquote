<?php

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $password = $_POST["password"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    include '../../classes/Database.class.php';
    include '../../classes/Users.class.php';
    include '../../classes/UsersController.class.php';
    include '../../classes/UsersView.class.php';

    $signup = new UsersController();
    $signup->createUser($name, $email, $password, $pwdRepeat);
    
    $login = new UsersView();// if all fine the user will be logged in
    $login->loginUser($email, $password);

    header("location: /dashboard");
}
