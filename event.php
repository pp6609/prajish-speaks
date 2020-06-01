<?php
if(!empty($_REQUEST["n1"]) and !empty($_REQUEST["d1"]) and !empty($_REQUEST["o1"])  and !empty($_REQUEST["s1"])and !empty($_REQUEST["d2"]))
{
$a=$_REQUEST["n1"];
$b=$_REQUEST["d1"];
$c=$_REQUEST["o1"];
$i=$_REQUEST["s1"];
$e=$_REQUEST["d2"];
if(!empty($_REQUEST["s2"]))
{
$con=mysqli_connect("localhost","root","","prajish");
$q="insert into event(Event,Date,Organized,Ticket,Description)values('$a','$b','$c','$i','$e')";
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
?>
<!doctype html>
<head>
<title>My Page</title>
<link type="text/CSS" rel="stylesheet" href="style.css">
<body background="images/img7.jpg">
</body>
</head>
</html>
<form action="event.php" method="post">
Event_name<input type="text" name="n1"><br><br>
Date<input type="text" name="d1"><br><br>
Organized_by<input type="text" name="o1"><br><br>
State<select name="s1">
<option>Free</option>
<option>Paid</option>
</select><br><br>
Description<textarea cols="12" rows="8" name="d2"></textarea><br><br>
<input type="submit" value="POST EVENT" name="s2">
</form>