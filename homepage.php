<!DOCTYPE html>
<html>
<header>
<?php
include 'navtag.php';
?>
</header>
<head>
<title>Food 'n' Fitness</title>
<script type="text/javascript" src="message.js">
</script>
<style>
.container {
    position: relative;

}

.center {
    position: relative;
    left: 0;
    top: 50%;
    width: 100%;
	align: center;
    text-align: center;
    margin: 30px;
  background-color: #ffffff;
  opacity: 0.5;
  filter: alpha(opacity=60);
}

.center p
{
	font-weight: bold;
	font-size: 25px;
	color: rgb(10, 10, 5);
}

h4
{
	font-weight: bold;
	font-size: 18px;
}

body{
	background-image: url("bg2.jpg");
	background-repeat: no-repeat;
	background-attachment: fixed;
    background-position: center;
	background-size: 100% 100%;
	background-webkit-filter: blur(2px);
    background-filter: blur(2px);
}
</style>

</head>
<body>

<div class="container">
  <div class="center"><p>Welcome to</p>
  <p>Food 'n' Fitness</p>
  <strong><h4>Eat Good. Look Good. Feel Good.</h4></strong></div>
 </div>
 
<?php
include "photoslides.php";
?>
 
 <footer>
<?php
include "footer.php";
?>
</footer>
</body>
</html>

