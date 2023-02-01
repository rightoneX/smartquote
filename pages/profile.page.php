<?php if (!isset($_SESSION["userid"])) {
    header("location: /");
} ?>

<h1>Profile Page</h1>

<?php

// echo $usersObj->
echo "user id - " . $_SESSION["userid"];
?>