<form method="post">
<table style="border: 10px solid; width: 50%; margin: auto;">
<tr><td>User Name:</td><td><input type="text" name="usr" /></td></tr>;
<tr><td>Password:</td><td><input type="password" name="pwd" /></td></tr>;
<tr><td><input type="submit" name="btnlogin" value="Sign In" /></td></tr>
<td><input type="checkbox" name="rememberme" />Remember Me</td>
<tr><td colspan="2">
<?php
//include 'reg.php';
if(isset($_POST["sub"]))
{

    $username= $_POST["usr"];
    $password= $_POST["pwd"];
    $authquery= "select fname from reg where usr='$username' and pwd='$password'";
    $result=@mysqli_query($link,$authquery) or die(mysqli_error($link));
    if($row=mysqli_fetch_assoc($result))
    {
        if(isset($_POST["rememberme"]))
        {
            setcookie("Name",$row["fname"],time()+60*20);
            setcookie("logintime",date("d/m/y, h:i:s a"),time()+60*20);
        }
        else
        {
            setcookie("Name",$row["fname"]);
            setcookie("logintime",date("d/m/y, h:i:s a"));
        }
         header("location:UserHome.php");
    }
    
    else
    {
        echo "<font color=red size=3>Invalid Username/Password</font>";
    }
   
}
?>

</table>

</form>

