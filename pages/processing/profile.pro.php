<?php
session_start();

if (isset($_POST["submit"]) && isset($_SESSION["userid"])) {

    $name = $_POST["name"];
    $surename = $_POST["surename"];
    $position = $_POST["position"];

    include '../../classes/Database.class.php';
    include '../../classes/Users.class.php';
    include '../../classes/UsersController.class.php';


    $update = new UsersController();
 
    $update->updateUser($_SESSION["userid"], $name, $surename, $position );

    header("location: /profile");
}

