<?php
$host="localhost";
$user="root";
$pwd="";
$dbname="test";
$link=@mysqli_connect($host,$user,$pwd,$dbname);
//echo mysqli_connect_errno();
if(mysqli_connect_errno())
{
    echo "error in connection!";
    exit();
}
?>