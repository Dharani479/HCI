<?php
    session_start();
	?>
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
$sql = "SELECT username,password,type FROM teachers WHERE username='$u'";
$result=mysqli_query($conn,$sql);
if (!$result) {
        echo 'MySQL Error: ' . mysqli_error();
        exit;
        }
$row = mysqli_fetch_array($result);

if( $p== $row['password']){
    $_SESSION["username"] = $u;
    $_SESSION["type"] = $row['type'];
	if($_SESSION["type"]==0){
header("location: home.php");}
if($_SESSION["type"]==1){
	header("location: home_s.php");
}
if($_SESSION["type"]==2){
	header("location: home_a.php");
}}
else
include("index.html");
?>
</head>
<body>
</body>
</html>