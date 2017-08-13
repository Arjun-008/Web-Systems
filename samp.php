<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sem";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("Connection failed");
}
else
{
    echo "Connection successfull";
}
$sql="Create table entry(user varchar(50),pass varchar(10))";
if($conn->query($sql)==TRUE)
{
    echo "table created";
}
else
{
    echo "not created table";
}
?>