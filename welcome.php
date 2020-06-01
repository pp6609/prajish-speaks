<?php
session_start();
$m=$_SESSION["pankaj"];
if(!empty($m))
{}
else
{
	header("refresh:0;url=login.php");
}
if(!empty($_REQUEST["s1"]))
{
include "login.php";
}
echo "<script>
body {
  background-color: lightblue;
}

h1 {
  color: white;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
}
</script>";
?>
<!doctype html>
<head>
<title>Welcome</title>
<link type="text/CSS" rel="stylesheet" href="style.css">
<body background="images/img7.jpg">
<a href='logout.php'>Logout</a>
<center><img src="images/img11.jpg" width="800" height="300"></center><br><br>
</body>
</head>
</html>
<?php 
 echo "YOUR WELCOME $m";
 echo "<br>";
$con=mysqli_connect("localhost","root","","prajish");
$q="select * from event";
$z=mysqli_query($con,$q);
while($rows=mysqli_fetch_array($z))
{
echo "<div>";
echo "Event:";echo $rows["Event"];
echo "<br>";
echo "Date:";echo $rows["Date"];
echo "<br>";
echo "Organized_By:";echo $rows["Organized"];
echo "<br>";
echo "Ticket:";echo $rows["Ticket"];
echo "<br>";
echo "Description:";echo $rows["Description"];
echo "</div>";
}
?>
<form action="welcome.php" method="post">
</form>