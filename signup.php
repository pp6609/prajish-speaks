<?php
if(!empty($_REQUEST["n1"]) and !empty($_REQUEST["a1"]) and !empty($_REQUEST["r1"])  and !empty($_REQUEST["d1"])and !empty($_REQUEST["mb"]) and !empty($_REQUEST["e1"]) and !empty($_REQUEST["p1"]) and !empty($_REQUEST["p2"]) and !empty($_REQUEST["ad"]))
{
$a=$_REQUEST["n1"];
$b=$_REQUEST["a1"];
$c=$_REQUEST["r1"];
$i=$_REQUEST["d1"];
$e=$_REQUEST["mb"];
$f=$_REQUEST["e1"];
$g=$_REQUEST["p1"];
$j=$_REQUEST["p2"];
$h=$_REQUEST["ad"];
if(!empty($_REQUEST["s2"]))
{
include "config.php";
$q="insert into form1(Name,Age,Gender,DOB,Mobileno,Email,Password,Address)values('$a','$b','$c','$i','$e','$f','$g','$h')";
if($g==$j)
{
if(mysqli_query($con,$q)==true)
{
echo "<script>alert('Record is saved');</script>";
}
else
{
echo "<script>alert('Error Found');</script>";
}
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
<h1 align="center">Welcome to Signup Page</h1>
<center><img src="images/img2.jpg" width="200" height="200"></center>
</body>
</html>
<form action="signup.php" method="post">
<p>Name<input type="text" name="n1"><br><br></p>
<p>Age<input type="text" name ="a1"><br><br></p>
<p>Gender Male <input type="radio" name="r1"></p>
<p>Female <input type="radio" name="r1"><br><br></p>
<p>DOB<input type="text" name="d1"><br><br></p>
<p>Mobileno<input type="text" name="mb"><br><br></p>
<p>Emailid<input type="text" name="e1"><br><br></p>
<p>Password<input type="password" name="p1" size="30"><br><br></p>
<p>Confirm Password<input type="password" name="p2" size="30"><br><br></p>
<p>Address<textarea cols="12" rows="8" name="ad"></textarea><br><br></p>
<p><input type="submit" value="Signup" name="s2">&nbsp;&nbsp;</p>
<p><a href='login.php'>BACK</a></p>
</form>