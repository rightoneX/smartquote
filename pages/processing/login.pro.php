<?php
    // include '../../includes/autoloader.inc.php';

    include '../../classes/Database.class.php';

    $email = $_POST['email'];
    $password = $_POST['password'];


    $user = new Database();

    // echo $user->page;
    // var_dump($user->select(`SELECT users FROM {$email} WHERE 'password' = {$password}`));

    //ToDo
    //connect to db
    //pass email and pwd get resul

    // if($user->credentials){
    //     //gran access
    // }else{
    //     //access denied 
    // }



    echo $email;