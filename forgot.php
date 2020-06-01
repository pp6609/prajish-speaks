<?php
if(!empty($_REQUEST["nb"]))
{
$number=$_REQUEST["nb"];

include "config.php";
$q="select * from form1 where Mobileno='$number'";
$i=0;
$z=mysqli_query($con,$q);
while($rows=mysqli_fetch_array($z))
{
	$i++;
	$password=$rows["Password"];
	$name=$rows["Name"];
	$messg="Your name is $name"."Your password is $password";
$username='prajish.prakash1404@gmail.com';
$hash='1404Prajish!';
$numbers=array($number);
$sender=urlencode('TXTLCL');
$message=rawurlencode($messg);
$numbers=implode(',',$numbers);
$data=array('username'=>$username, 'hash'=>$hash, 'numbers'=>$numbers, "sender"=>$sender, "message"=>$message);
$ch=curl_init('http://api.textlocal.in/send/');
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$response=curl_exec($ch);
curl_close($ch);
echo $response;
}
if($i==0)
{
	echo "<script>alert('This mobileno is Not Register');</script>";
}
}
?>
<!doctype html>
<head>
<title>My Page</title>
<link type="text/CSS" rel="stylesheet" href="style.css">
</head>
<body background="images/img7.jpg">
<h1 align="center">Forgot Password?</h1>
<center><img src="images/img6.png" width="200" height="200"></center>
</body>
</html>
<form action="forgot.php" method="post">
<p>Enter mobileno<input type="text" name="nb"><br><br></p>
<p><a href='login.php'>BACK</a>&nbsp;&nbsp;</p>
<p><input type="submit" value="GET PASSWORD" name="s1"></p>
</form>