<?php
include "router.php";
if (!isset($allowd) or $allowed!==1) {
    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
    include ROOT.'404.php';
}
$subscribed = array();