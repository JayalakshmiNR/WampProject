<?php

$database="jaya";

if(isset($_POST['lunchcombo']))
{
$name=$_POST['lunchcombo'];
}

if(isset($_POST['quantity']))
{
$quan=$_POST['quantity'];
}

$con=mysqli_connect("localhost","root","",$database);

if(isset($_POST['insert']))
{
mysqli_query($con,"INSERT INTO order_details(Name,Quantity) VALUES ('$name','$quan')");
echo"Order Received";
}
?>