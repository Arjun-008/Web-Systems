<?php
//to get data from cookie
if(isset($_COOKIE["fullname"]))
{
    echo "Welcome: &nbsp;<b>".strtoupper($_COOKIE["fullname"])."</b><br>";
    echo "Login Time:&nbsp; <b>".$_COOKIE["logintime"]."</b><br><br>";
    echo "<a href=signout.php>Sign Out</a>";
}
else
{
    header("location:login.php");
}
?>