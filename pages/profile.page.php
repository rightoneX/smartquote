<?php if(!isset($_SESSION["userid"])){ header("location: /"); } ?>

<h1>Profile Page</h1>
<?php
    $usersObj = new UserView();
    $usersObj->showUser("alex@auco.co.nz");

    ?>
