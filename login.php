<?php
session_start();
if(!empty($_REQUEST["e1"]) and !empty($_REQUEST["p1"]))
{
	 $i=0;
$a=$_REQUEST["e1"];
$b=$_REQUEST["p1"];
include "config.php";
$q="select * from form1 where Email='$a' and Password='$b'";
$z=mysqli_query($con,$q);
while($rows=mysqli_fetch_array($z))
{
	$i++;
	$_SESSION["pankaj"]=$a;
	header("refresh:0;url=welcome.php");
}
if($i==0)
{
	     $i=0;
	    $q="select * from admin where username='$a' and password='$b'";
		$z=mysqli_query($con,$q);
		while($rows=mysqli_fetch_array($z))
		{
			$i++;
			header("refresh:0;url=admin.php");
		}
	if($i==0)
	{
	echo "<script>alert('Incorrect Credentials');</script>";
	}
}



}
?>
<!doctype html>
<head>
<title>My Page</title>
<link type="text/CSS" rel="stylesheet" href="style.css">
</head>
<body background="images/img7.jpg">
<a href="page.html">HOME</a>&nbsp;&nbsp;&nbsp;
<a href="about.html">ABOUT</a>&nbsp;&nbsp;&nbsp;
<a href="contact.html">CONTACT</a>&nbsp;&nbsp;&nbsp;
<a href="profile.html">VIEW PROFILE</a>
<h1 align="center"><p style="color:Black;">Welcome to Login Page</p></h1>
<center><img src="images/img1.png" width="200" height="200"></center>
<center><iframe width="250" height="200" src="https://www.youtube.com/embed/15PK38MUEPM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
</body>
</html>
<form action="login.php" method="post">
<p style="color:Black; background color:blue; align="center"">Email id&nbsp;&nbsp;<input type="text" name="e1"><br><br></p>
<p style="color:Black; background color:blue; align="center"">Password&nbsp;&nbsp;<input type="password" name="p1" size="30"><br><br></p>
<p><input type="submit" value="LOGIN"></p>
</form>&nbsp;&nbsp;
<p><a href='forgot.php'>FORGOT PASSWORD</a><br><br></p>
<p><a href='signup.php'>New User?</a></p>
