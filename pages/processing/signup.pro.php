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

    $signup = new UsersController($name, $email, $password);

    $signup->createUser();

    // if all fine the user will be loged-in
    $login = new UsersView($email, $password);

    $login->loginUser();

    header("location: /tasks");
}
