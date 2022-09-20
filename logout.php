<?php

session_start();

if(isset($_SESSION['uid']))
{
    unset($_SESSION['uid']);
    $_SESSION['accounttype'] = '0';
}
header("Location: login.php");
die;


?>

