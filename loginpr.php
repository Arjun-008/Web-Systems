<?php

session_start();

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<style type="text/css">
input[type=text] {
    color:black;
    border: none;
    border: 2px solid maroon;
    border-radius: 2px;
}

input[type=password] {
    color:black;
    border: none;
    border: 2px solid maroon;
	border-radius: 2px;
}


.center form
{
	line-height:150%;
	background-color:rgba(0,0,0,0.5);
	width:30%;
	margin-left:200 px;
	margin-right:500 px;
	border-style: solid;
    border-width: 3px;
	margin: auto;
}

 input[type=submit]{
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
.hi h4
{
    color:white;
}
</style>
<script type="text/javascript" src="drift_message.js">
</script>
</head>
<header><?php
include 'nav.php';
?></header>
<body>
<br />
<div class="center">
<form action="pred.php" method="POST">
<table align="center" width="100%">
<tr>
	<th colspan="4"><h1 align="center" color="black">Log In</h1></th>
</tr>

<tr>
<td>User id</td>
<td>:</td>
<td><input type="text" name="usr" value=""></td>
</tr>

<tr>
<td>Password</td>
<td>:</td>
<td><input type="password" name="pass" value=""></td>
</tr>

<tr>
<td></td>
<td></td>
<td><input type="checkbox" name="rememberme" />Remember Me</td>
</tr>
<tr>
<br />
</tr>


<tr>
<td>     </td>
<td align="center"><input type="submit" name="sub" value="Submit"></td>
<td align="center"><input type="reset" name="res" value="Reset"></td>
<td>     </td>
</tr>

</table>
<br />
<div class="hi">
<h4 align="center">New user?<a href="reg.php"><strong>Register</strong><a></h4>
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







