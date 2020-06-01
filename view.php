<table border="1">
<tr>
<th>Name</th>
<th>Age</th>
<th>Gender</th>
<th>DOB</th>
<th>Mobileno</th>
<th>Email</th>
<th>Password</th>
<th>Address</th>
</tr>
<?php
$con=mysqli_connect("localhost","root","","prajish");
$q="select * from form1";
$z=mysqli_query($con,$q);
while($rows=mysqli_fetch_array($z))
{
echo "<tr>";
echo "<td>";
echo $rows["Name"];
echo "</td>";
echo "<td>";
echo $rows["Age"];
echo "</td>";
echo "<td>";
echo $rows["Gender"];
echo "</td>";
echo "<td>";
echo $rows["DOB"];
echo "</td>";
echo "<td>";
echo $rows["Mobileno"];
echo "</td>";
echo "<td>";
echo $rows["Email"];
echo "</td>";
echo "<td>";
echo $rows["Password"];
echo "</td>";
echo "<td>";
echo $rows["Address"];
echo "</td>";
echo "</tr>";
}
?>
</table>
<!doctype html>
<head>
<title>My Page</title>
<link type="text/CSS" rel="stylesheet" href="style.css">
</head>
<body background="images/img7.jpg">
</body>
</html>
<a href="admin.php">BACK</a>
