<!DOCTYPE HTML>
<html>
<head>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "student";
$row="";
// Create connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$u=$_POST["username"];
$p=$_POST["password"];
$t=0;
$sql = "INSERT INTO teachers(username,password,type) VALUES ('$u','$p','$t')";
$result=mysqli_query($conn,$sql);
if($result == TRUE)
	header("location: add_t.php");
else
	echo "ERROR"
?>
</head>
<body>
</body>
</html>