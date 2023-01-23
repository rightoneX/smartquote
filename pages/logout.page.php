<h1>Goodby</h1>

<?php
    session_start();
    session_unset();
    session_destroy();
    

    //ToDo refresh 
    header("location: /");
?>