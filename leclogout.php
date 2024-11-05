<?php
include 'config.php';

session_start();

session_destroy();

unset($user);

function redirect($url)
{
    header("Location: $url");
    exit();
}

redirect("leclogin.php");

?>
