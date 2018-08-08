<?php

$database="jaya";

if(isset($_POST['email']))
{
$email=$_POST['email'];
}

if(isset($_POST['psw']))
{
$psw=$_POST['psw'];
}
if(isset($_POST['rpsw']))
{
$rpsw=$_POST['rpsw'];
}

$con=mysqli_connect("localhost","root","",$database);
if(isset($_POST['cancel']))
{
header("location:home.php");
exit;
}
if($psw==$rpsw)
{
if(isset($_POST['insert']))
{
mysqli_query($con,"INSERT INTO login_details(Username,Password) VALUES ('$email','$psw')");
echo "success";
header("location:home.php");
exit;
}
}
else
{
echo "Password not matched.";
include 'signup.php';
}

?>