<?php



if(isset($_POST["submit"])){

    $name = $_POST["name"];
    $pwd = $_POST["password"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    include '../../classes/Database.class.php';
    include '../../classes/Signup.class.php';
    include '../../classes/SignupController.class.php';


    $signup = new SignupController($name, $pwd, $pwdRepeat, $email);

    $signup->signupUser();

    header("location: ../../index.php?error=none");

}