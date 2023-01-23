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
    // if sign up is granted redirect to task page.
    // - fill up information about the user profile
    // - create company  - if not exist yet
    //      setup log, descriptions, terms & condition and etc
    // - add product and brand  - if not exist yet
    // - add client
    header("location: /tasks"); 
}