<!doctype html>
<html lang="en-IN">
<head>
<script>
function validateForm() {
    var a = document.register.fname.value;
    var b = document.register.lname.value;
    var c = document.register.eml.value;
    var d = document.register.dt.value;
    var e = document.register.usr.value;
    var f = document.register.pass.value;
    var g = document.register.r1.value;
    if ((a == "")||(b == "")||(c == "")||(d == "")||(e == "")||(f == "")) 
    {
        alert("Fields must be filled out!");
        return false;
    }
    
}
</script>
<title>Registration</title>
<style type="text/css">
input[type=text] ,[type=email]{
    color:black;
    border: none;
    border: 2px solid black;
    border-radius: 2px;
}


input[type=password] {
    color:black;
    border: none;
    border: 2px solid black;
	border-radius: 2px;
}

select {
    color:black;
    border: none;
    border: 2px solid black;
	border-radius: 2px;
}

input[type=date] {
    color:black;
    border: none;
    border: 2px solid black;
	border-radius: 2px;
}

.center form
{
	line-height:100%;
	background-color:rgba(0,0,0,0.5);
	width:40%;
	border-style: solid;
    border-width: 3px;
	margin: auto;
}

 input[type=submit]
 {
    background-color: #661400;
    border: none;
    color: white;
    padding: 9px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius: 6px;
}

 input[type=reset]
 {
    background-color: #661400;
    border: none;
    color: white;
    padding: 9px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius: 6px;
}
body 
{
    background-image: url("loginreg.jpg");
	height: 100%;
	background-repeat: no-repeat;
	background-attachment: fixed;
    background-position: center;
	background-size: 100% 100%;
	background-webkit-filter: blur(2px);
    background-filter: blur(2px);
}

td,th
{
    color:white;
	font-family:arial;
	font-weight: bold;
	font-size: 17px;
}
.hh h4
{
    color:white;
}


</style>
<script type="text/javascript" src="drift_message.js">
</script>
</head>
<header><?php
include 'navtag.php';
?></header>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="wst";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['sub']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['eml'];
	$dob=$_POST['dt'];
	$userid=$_POST['usr'];
	$pwd=$_POST['pass'];
	$gender=$_POST['r1'];
	
	$qry=mysqli_query($conn,"Insert into reg values('$fname', '$lname', '$email', '$dob', '$userid', '$pwd', '$gender')");
}



?>

<br />
<div class="center">
<form name="register" action="" method="POST" onsubmit="return validateForm();">
<table align="center">
<tr>
	<th colspan="4"><h1 align="center" color="white">Register Here!</h1></th>
</tr>
<tr>
<td>First Name*</td>
<td>:</td>
<td><input type="text" name="fname" value=""></td>
</tr>

<tr>
<td> </td>
</tr>

<tr>
<td>Last Name*</td>
<td>:</td>
<td><input type="text" name="lname" value="" ></td>
</tr>

<tr>
<td> </td>
</tr>

<tr>
<td>Email*</td>
<td>:</td>
<td><input type="email" name="eml" value=""></td>
</tr>

<tr>
<td> </td>
</tr>

<tr>
<td>Date of Birth*</td>
<td>:</td>
<td><input type="date" name="dt" value=""></td>
</tr>

<tr>
<td> </td>
</tr>

<tr>
<td>User id*</td>
<td>:</td>
<td><input type="text" name="usr" value=""></td>
</tr>

<tr>
<td> </td>
</tr>

<tr>
<td>Password*</td>
<td>:</td>
<td><input type="password" name="pass" value=""></td>
</tr>

<tr>
<td> </td>
</tr>

<tr>
<td>Gender</td>
<td>:</td>
<td><input type="radio" name="r1" value="male"><strong>Male      </strong>
<input type="radio" name="r1" value="female">Female</td>
</tr>

<tr>
<th colspan="4"><h5>Fields marked with * are mandatory!</h5></th>
</tr>



<tr>
<td>     </td>
<td align="center"><input type="submit" name="sub" value="Submit"></td>
<td align="center"><input type="reset" name="res" value="Reset"></td>
<td>     </td>
</tr>
</table>
<br />
<div class="hh">
<h4  align="center" >Already a user?<a href="login.php"><strong>Log In</strong></a></h4>
</div>
</form>
</div>

<footer>
<?php
include "footer.php";
?>
</footer>

</body>
</html>