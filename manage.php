<?php
if(!empty($_REQUEST["b1"]) and !empty($_REQUEST["n1"]) and !empty($_REQUEST["a1"]))
{
$a=$_REQUEST["b1"];
$b=$_REQUEST["n1"];
$c=$_REQUEST["a1"];
}
if(!empty($_REQUEST["s3"]))
{
$con=mysqli_connect("localhost","root","","prajish");
$q="update form1 set Name='$b',Age='$c' where Email='$a'";
if(mysqli_query($con,$q)==true)
{
echo "<script>alert('Record is updated');</script>";
}
else
{
echo "<script>alert('Record not updated');</script>";
}
}
?>
<!doctype html>
<head>
<title>My Page</title>
<link type="text/CSS" rel="stylesheet" href="style.css">
<body background="images/img7.jpg">
</body>
</head>
</html>
<form action="manage.php" method="post">
Email<input type="text" name="b1"><br><br>
Name<input type="text" name="n1"><br><br>
Age<input type="text" name="a1"><br><br>
<input type="submit" value="Update" name="s3">
</form>
<a href="admin.php">BACK</a>