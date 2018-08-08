<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="logincss.css">
</head>
<body bgcolor="DarkSlateBlue">
<center>
<br/><br/>
<h1 style ="font-family:Comic Sans MS;color : White;">  JKJM   Hospital  </h1>
<pre><h4 style ="font-family:Cursive;color : White;">20 Rathakrishnan street, Anna Nagar, 
Chennai - 600028 </h4>
</pre>
</center>
<br/>
<marquee>
<img src="hospital.jpg" height="200" width="200"></img>
 <img src="hospitall.jpg" height="200" width="200"></img>
 <img src="hospitalll.jpg" height="200" width="200"></img>
<img src="hospitallll.jpg" height="200" width="200"></img>
<img src="hospit.jpg" height="200" width="200"></img>
<img src="hosp.jpg" height="200" width="200"></img>
</marquee>
<center>
<h3 style ="font-family:Comic Sans MS;color : White;"><pre> Staff   Login </pre></h3>
</center>
<div id="frm">
<form action="login_process.php" method="POST">
<p>
<label style ="font-family:Comic Sans MS;color : White;">Username:</label>
<input type="text" id="user" name="user" size="30" />
<br>
<br>
<label style ="font-family:Comic Sans MS;color : White;">Password:</label>
<input type="password" id="pass" name="pass" size="30" />
</br>
<input type="Submit" id="btn" value="  Login   "  />
</p>
</form>
</div>
</body>
</html>