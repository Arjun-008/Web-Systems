<!DOCTYPE html>
<html>
<header>
<?php
include 'navtag.php';
?>
</header>
<head>
<title>About Us</title>

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
  background-color: #0d0d0d;
  opacity: 0.57;
  filter: alpha(opacity=60);
}

.center img
{
    vertical-align: text-top;
}

.center p
{
	font-weight: bold;
	font-size: 40px;
	color: #ffffff;
	opacity: 0.8;
}

.aboutus {
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

.aboutus p
{
	font-weight: bold;
	font-size: 20px;
	color: rgb(10, 10, 5);
}

body{
	background-image: url("aboutus.jpg");
	background-repeat: no-repeat;
	background-attachment: fixed;
    background-position: center;
	background-size: 100% 100%;
	background-webkit-filter: blur(2px);
    background-filter: blur(2px);
}
</style>
<script type="text/javascript" src="drift_message.js">
</script>
</head>
<body>
<div class="container">
  <div class="center"><p><img src="log2.png" height="40" width="40" >  About Us </div> 
  
<div class="aboutus">
<p>
Hey there! We Arjun,Syed and Vaibhav are presenting before you Travallay. The story behind Travallay is 
inspired from real time scenario of long waiting list tickets of 
Indian Railways. We understand your aggression and dissappointment of an unconfirmed ticket. 
So we have come with a neural network solution to predict your confirmation of ticket.<p>We also provide a live 
twitter fetching feedback on Indian Railways as default. However, any keyword other than railways can also get the analysis.</p>
<p>So readers, what are you waiting for? Take a look and explore <strong>Travallay for Smart Ways to Travel.</strong></p>
</p>
  </div>
 </div>
 <footer>
<?php
include "footer.php";
?>
</footer>
</body>
</html>

