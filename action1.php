
<?php
	
	$database="jaya";
	$Username=$_POST['uname'];
	$Password=$_POST['psw'];

	

	$con=mysqli_connect("localhost", "root", "",$database);
	

	$result=mysqli_query($con,"select * from login_details where Username= '$Username' and Password='$Password'")
	or die("Unable to connect".mysql_error());
	$row=mysqli_fetch_array($result);
	if ($row['Username']==$Username && $row['Password'] == $Password){
		echo "Login successful";
		header("location:home.php");
		exit;
	}else{
		echo"Username or Password incorrrect  ";
		echo"Try Again";
		include 'first.php';	
	}
?>
