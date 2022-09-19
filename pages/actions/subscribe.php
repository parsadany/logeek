<?php
include 'router.php';
include 'subscribe/data.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $allowd = 1;
    $fp = fopen('subscribe/data.php', 'a'); //opens file in append mode  
    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $flag = 0;
    foreach ($subscribed as $key => $value) {
        if ($email == $key) {
            $flag = 1;
        }
    }
    if ($flag == 0) {
        fputs($fp, PHP_EOL.'$subscribed["'.$email.'"] = "'.$fname.'";');
        $banner = array(
            "message" => "Subscribed Successfully. Thank you.",
            "status" => 1,
        );
    }
    else {
        $banner = array(
            "message" => "You are already subscribing!",
            "status" => 0,
        );
    }
    fclose($fp); 
}
include ROOT . "pages/home.php";
?>