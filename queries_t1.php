<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";
$row="";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$ans=$_POST["answer"];
echo $ans;

$ques=$_POST["question"];
echo $ques;
$sql1="DELETE  FROM queries WHERE ans=''";
$result1 = mysqli_query($conn, $sql1);
 //$row = mysqli_fetch_array($result1);
$sql = "INSERT INTO queries (ques,ans) VALUES ('$ques','$ans')";
$result = mysqli_query($conn, $sql);
	if ($result) {
		header("location: queries_t.php");
        }
		else{
			echo "noo";
			exit;}
?>