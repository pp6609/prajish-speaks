<?php
if(!empty($_REQUEST["s1"]))
{
include "login.php";
}
?>
<!doctype html>
<head>
<title>Admin</title>
<link type="text/CSS" rel="stylesheet" href="style.css">
<body background="images/img7.jpg">
<a href='logout.php'>Logout</a>
<center><img src="images/img5.jpg" width="300" height="300"></center>
<a href='view.php'>VIEWACCOUNT</a><br><br>
<a href='delete2.php'>DELETEACCOUNT</a><br><br>
<a href='manage.php'>MANAGEACCOUNT</a><br><br>
<a href='event.php'>EVENT</a>
</body>
</head>
</html>
