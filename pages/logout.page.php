<?php 

if (!isset($_SESSION["userid"])) {
    header("location: /");
}

include_once('pages/processing/logout.pro.php');
echo "<meta http-equiv='refresh' content='0'>";
