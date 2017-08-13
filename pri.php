<!doctype html>
<html lang="en-IN">
<head>
<script>
function validateForm() {
    var s = document.myjourney.src.value;
    var d = document.myjourney.dest.value;
    
    var a1 = document.myjourney.fname.value;
    var b1 = document.myjourney.lname.value;
    var c1 = document.myjourney.eml.value;
   /*var istat = document.myjourney.istat.value;*/
    if ((s == "")||(d == "")||(a1 == "")||(b1 == "")||(c1 == "")) 
    {
        alert("Fields must be filled out!");
        return false;
    }
    
}
function GetDays()
{
  
     var dt1 = new Date(document.getElementById("dt1").value);
                var dt = new Date(document.getElementById("dt").value);
    return parseInt((dt - dt1) / (24 * 3600 * 1000));
}
function cal(){
        if(document.getElementById("dt")){
            document.getElementById("numdays2").value=GetDays();
        }  
    }
</script>
<title>Plan My Journey</title>
<style type="text/css">
input[type=text] ,[type=email]{
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
	width:50%;
	border-style: solid;
    border-width: 3px;
	margin:auto;
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
include 'navtag1.php';
?></header>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="ticket";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['sub']))
{
    $dle=$_POST['numdays'];
    $sr=$_POST['src'];
    $des=$_POST['dest'];
    $dobt=$_POST['dt1'];
    $dob=$_POST['dt'];
    $fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['eml'];
	$qry=mysqli_query($conn,"Insert into data values('$sr','$des','$dobt','$dob','$dle','$fname', '$lname', '$email')");
   
}
?>

<br />
<div class="center">
<form name="myjourney" action="" method="POST" onsubmit="return validateForm();">
<table align="center">
<tr>
	<th colspan="4"><h1 align="center" color="white">My Ticket Details!</h1></th>
</tr>
<tr>
<td>Source Station*</td>
<td>:</td>
<td><input type="text" name="src" value="" ></td>
</tr>

<tr>
<td> </td>
</tr>

<tr>
<td> Destination Station*</td>
<td>:</td>
<td><input type="text" name="dest" value="" /></td>
</tr>

<tr>
<td> </td>
</tr>

<tr>
<td>Date of Booking*</td>
<td>:</td>
<td><input type="date" name="dt1" value="" id="dt1" onchange="cal()" /></td>
</tr>

<tr>
<td> </td>
</tr>

<tr>
<td>Date of Travel*</td>
<td>:</td>
<td><input type="date" name="dt" value="" id="dt" onchange="cal()" /></td>
</tr>

<tr>
<td> </td>
</tr>
<tr>

<tr>
<td>Days To Travel*</td>
<td>:</td>
<td><input type="text" name="numdays" value="" id="numdays2" /></td>
</tr>

<tr>
<td> </td>
</tr>

<td>First Name*</td>
<td>:</td>
<td><input type="text" name="fname" value="" ></td>
</tr>
<tr>

<tr>
<td> </td>
</tr>
<tr>

<td>Last Name*</td>
<td>:</td>
<td><input type="text" name="lname" value="" ></td>
</tr>
<tr>

<tr>
<td> </td>
</tr>
<tr>

<td>Email*</td>
<td>:</td>
<td><input type="email" name="eml" value=""></td>
</tr>
<tr><th colspan="2"><h5>Fields marked with * are mandatory!</h5></th></tr>
<td>    </td>
<td align="center"><input type="submit" name="sub" value="Submit"></td>
<td align="center"><input type="reset" name="res" value="Reset"></td>
<td>     </td>
</tr>
</table>
<br />
<div class="hh">
<h4  align="center" >To Sign Again?<a href="login.php"><strong>Log In</strong></a></h4>
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