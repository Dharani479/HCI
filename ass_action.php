<?php
session_start();
    $type=$_SESSION["type"];
	$u=$_SESSION["username"];
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
	$c_r=$_POST["q1"];
	$t_r=$_POST["q2"];
	$t_k=$_POST["q3"];	
	$t_c=$_POST["q4"];
	$c_i=$_POST["q5"];
	$c_e=$_POST["q6"];
	$c_m=$_POST["q7"];
	$sql = "INSERT INTO assignment VALUES ('$c_r','$t_r','$t_k','$t_c','$c_i','$c_e','$c_m','$u')";
	if($result = mysqli_query($conn, $sql))
		header("location: home_s.php");
   
?>

