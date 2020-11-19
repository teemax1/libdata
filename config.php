<?php
$con=mysqli_connect("localhost","root","");

if (!$con) {
	echo "Error connecting to host";
}


$db=mysqli_select_db($con,"main-project");
if (!$db) {
echo "Error selecting database".mysqli_error($con);
}














?>
























<!DOCTYPE html>
<html>
<head>
	<title>Config</title>
</head>
<body>










</body>
</html>