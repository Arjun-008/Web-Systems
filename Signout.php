<?php
//for signout
include 'login.php';
include 'UserHome.php';
include 'reg.php';
if(isset($_COOKIE["fname"]))
{
    setcookie("fname","",time()-1);
    setcookie("logintime","",time()-1);
    header("location:login.php");
}
else
{
    header("location:login.php");
}
?>