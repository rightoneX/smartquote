<?php if(!isset($_SESSION["userid"])){ header("location: /"); } ?>

<h1>Goodby</h1>

<?php
include_once('pages/processing/logout.pro.php');
    // session_unset();
    // session_destroy();
    
    // header("Refresh:0");

    //ToDo refresh 
    // header("location: /");
?>