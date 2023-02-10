<?php
session_start();

if (isset($_POST["submit"]) && isset($_SESSION["userid"])) {

    include '../../classes/Database.class.php';
    include '../../classes/Users.class.php';
    include '../../classes/UsersController.class.php';

    if ($_POST["notification"] == 'on') { // check if user wants to receive the task notification
        $notification = 1;
    } else {
        $notification = 0;
    };

    if ($_POST["newsletter"] == 'on') { // check if user wants to receive the weekly newslatter
        $newsletter = 1;
    } else {
        $newsletter = 0;
    };

    if($_POST["dob"] == null){ // user did not enter birthday 
        $dob = "1900-01-01";
    }else {
        $dob = $_POST["dob"];
    }

    $data = [
        $name = $_POST["name"],
        $surename = $_POST["surename"],
        $position = $_POST["position"],
        $dob,
        $phone = $_POST["phone"],
        $notification,
        $newsletter,
        $userid = $_SESSION["userid"],
    ];

    // var_dump($data);
    // die();

    $update = new UsersController();
    $update->updateUser($data);

    header("location: /profile");
}
