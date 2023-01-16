<?php

spl_autoload_register('autoLoader');

function autoLoader($className)
{
    $path = "classes/";
    $extansion = ".class.php";
    $fullPath = $path . $className . $extansion;
    if (!file_exists($fullPath)) {
        return false;
    }
    include $fullPath;
}
