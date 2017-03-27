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
$ques=$_POST["question"];
$sql = "INSERT INTO queries (ques) VALUES ('$ques')";
$result = mysqli_query($conn, $sql);
	if (!$result) {
        echo 'MySQL Error: ' . mysqli_error();
        exit;
        }
		else
		header("location: queries_s.php");
?>