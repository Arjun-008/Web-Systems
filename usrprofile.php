<?php
error_reporting(0);
session_start();

?>
<html lang="en">
<header>
<?php
include 'pronav.php';
?>
</header>
<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

    .row img {
      width: 200px;
	  height: 200px;
      margin: auto;
  }
  .row img:hover {
    opacity: 0.5;
    filter: alpha(opacity=50);
}
    .container-fluid bg-3 text-center
	{
		margin:auto;
	}
	h2
	{
		text-align: left;
		font-family: "Papyrus,fantasy";
	}
	.longlabel h2
	{
		background-color: rgba(128, 0, 0, 0.5);
	}
  </style>
</head>
<body>
<?php
error_reporting(0);
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
if(isset($_POST["sub"]))
{
    $userid=$_POST['usr'];
	$pwd=$_POST['pass'];
	
	$qry=mysqli_query($conn,"select fname,usr, pwd from reg;");
	while($row=mysqli_fetch_assoc($qry))
	{
		if($userid==$row['usr'] && $pwd==$row['pwd'])
		{
		header('location:http://localhost/wst/planmj.php');
        }
		else{
			$ctr++;
		}
	}
	if($ctr!=0)
	{
		echo "<br />"."Your UserID or password doesn't match!";
	}
    
$cookie_name = "user";
$cookie_value = "$userid";
$cookie_name1 = "Password";
$cookie_value1 = "$pwd";
setcookie($cookie_name, $cookie_value, time() + (60), "/"); // 86400 = 1 day
setcookie($cookie_name1, $cookie_value1, time() + (60), "/");
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
}
if(!isset($_COOKIE[$cookie_name1])) {
    echo "Cookie named '" . $cookie_name1 . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name1 . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name1];
}
?>
</body>
</html>