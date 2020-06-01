<?php
if(!empty($_REQUEST["b1"]))
{
$c=$_REQUEST["b1"];
}
if(!empty($_REQUEST["s4"]))
{
$con=mysqli_connect("localhost","root","","prajish");
$x="delete from form1 where Email='$c'";
if(mysqli_query($con,$x)==true)
{
echo "<script>alert('Record is deleted');</script>";
}
else
{
echo "<script>alert('Record not deleted');</script>";
}
}
?>
<!doctype html>
<head>
<title>My Page</title>
<link type="text/CSS" rel="stylesheet" href="style.css">
</head>
<body background="images/img7.jpg">
</body>
</html>
<form action="delete2.php" method="post">
Email<input type="text" name="b1"><br><br>
<input type="submit" value="Delete" name="s4">
</form>
<a href="admin.php">BACK</a>