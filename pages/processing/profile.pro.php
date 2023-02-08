<?php
session_start();

if (isset($_POST["submit"]) && isset($_SESSION["userid"])) {

    include '../../classes/Database.class.php';
    include '../../classes/Users.class.php';
    include '../../classes/UsersController.class.php';

    $data =[
        $name = $_POST["name"],
        $surename = $_POST["surename"],
        $position = $_POST["position"],
        $dob = $_POST["dob"],
        $phone = $_POST["phone"],
        $userid = $_SESSION["userid"],
    ];

    $update = new UsersController();
    $update->updateUser($data);

    header("location: /profile");
}

