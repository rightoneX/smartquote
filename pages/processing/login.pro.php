<?php

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    include '../../classes/Database.class.php';
    include '../../classes/Users.class.php';
    include '../../classes/UsersView.class.php';

    $login = new UsersView();

    $login->loginUser($email, $password);

    header("location: /dashboard");
}
