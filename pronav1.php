<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>


li .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="homepage.php"><p style="font-family: lucida console; font-weight: bold;">Food 'n' Fitness</p></a>
    </div>
    <ul class="nav navbar-nav">
      <!--<li class="active"><a href="homepage.php">Home</a></li>-->
      <li><a href="about.php">About Us</a></li>
	  <li><a href="work.php">Work With Us</a></li>
      <li><a href="contact.php">Contact Us</a></li>
    </ul>
    <form class="navbar-form navbar-left">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
	<ul class="nav navbar-nav navbar-right">
      <li class="dropdown" style="float:right">
    <a href="javascript:void(0)" class="dropbtn">
    <?php
    error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="wst";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 
    if(isset($_POST['sub']))
    {
	   $userid=$_POST['usr'];
	   $pwd=$_POST['pass'];
	   $qry=mysqli_query($conn,"select fname,userid, pwd from reg;");
	   while($row=mysqli_fetch_assoc($qry))
	   {
		  if($userid==$row['userid'] && $pwd==$row['pwd'])
		  { 
			$_SESSION['name']=$row['fname'];
			//echo "<br />"."Logged In successfully."."<br />";
			echo "<br />"."Hi ".$row['fname']."<br />"."<br />";
		}
		//else{
		//	$ctr++;
		//}
	}
	/*if($ctr!=0)
	{
		echo "<br />"."Your UserID or password doesn't match!";
	}*/
}

?>
    </a>
    <div class="dropdown-content">
      <a href="profile.php">Profile</a>
      <a href="#">My Recipe</a>
      <a href="#">Favourites</a>
	  <a href="homepage.php">Log Out</a>
	  <?php
session_destroy();
?>
    </div>
  </li>
    </ul>
  </div>
</nav>

</body>
</html>



