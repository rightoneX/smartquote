<?php

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
var_dump (parse_url($url, PHP_URL_QUERY));