<?php

session_unset();
session_destroy();

header("location: /");
// header('location:in_page.php');
