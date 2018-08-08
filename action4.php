<?php

$database="jaya";

if(isset($_POST['name']))
{
$name=$_POST['name'];
}

if(isset($_POST['notable']))
{
$quan=$_POST['notable'];
}
if(isset($_POST['rfor']))
{
$rfor=$_POST['rfor'];
}

$con=mysqli_connect("localhost","root","",$database);

if(isset($_POST['insert']))
{
mysqli_query($con,"INSERT INTO table_details(Name,Notable,Rfor) VALUES ('$name','$quan','$rfor')");
echo"Table reserved";
}
?>