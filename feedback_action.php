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
	$c_r=$_POST["c_rate"];
	$t_r=$_POST["t_rate"];
	$t_k=$_POST["t_k"];	
	$t_c=$_POST["t_c"];
	$c_i=$_POST["c_i"];
	$c_e=$_POST["c_e"];
	$c_m=$_POST["c_m"];
	$sql = "INSERT INTO feedback VALUES ('$c_r','$t_r','$t_k','$t_c','$c_i','$c_e','$c_m','$u')";
	if($result = mysqli_query($conn, $sql))
		header("location: home_s.php");
   
?>

