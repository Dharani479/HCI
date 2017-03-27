<?php
session_start();
    $type=$_SESSION["type"];
	$u=$_SESSION["username"];
?>
<!DOCTYPE html>
<html>
<head>
<style>
div.container {
    width: 100%;   
}

header {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}
nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
	background-color: white;
	font-size:18px;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}

article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
	text-align: center;
	font-size:16px;
}
table {
    border-collapse: collapse;
    width: 100%;
}
th{
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
	font-size:20px;
}
 td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
tr:nth-child(even){background-color:#96CDCD}


</style>
</head>
<body>

<div class="container">

<header>
   <h1>Assignment</h1>
</header>
  
<nav>
 <ul>
	 <li><a href="home.php">Home</a></li>
	 <li><a href="names.php">Students</a></li>
	 <li><a href="form.php">Graph_students</a></li>
	 <li><a href="graph1.php">Graph_class</a></li>
	 <li><a href="upload.php">Materials</a></li>
	 <li><a href="ass_t.php">Assignment</a></li>
	 <li><a href="queries_t.php">Queries</a></li>
	 <li><a href="feedback_t.php">Feedback</a></li>
	 <li><a href="logout.php">Logout</a></li>
 </ul>
</nav>
<article>
<h2 style="text-align:center">Assignment</h2>

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
$sql = "SELECT * FROM assignment where rollno = '$u'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$sql1 = "SELECT * FROM assignment";
$result1 = mysqli_query($conn, $sql1);
$count=1;
while ($row1 = mysqli_fetch_array($result1))
{
	if ($count > 2){
		$t=0;
		
		if($row['q1'] === $row1['q1']){
			$t++;
		}
		if($row['q2'] == $row1['q2']){
			$t++;
		}
		if($row['q3'] == $row1['q3']){
			$t++;
		}
		if($row['q4'] == $row1['q4']){
			$t++;
		}
		if($row['q5'] == $row1['q5']){
			$t++;
		}
		if($row['q6'] == $row1['q6']){
			$t++;
		}
		if($row['q7'] == $row1['q7']){
			$t++;
		}
		echo "Total marke for ".$row1['rollno']."is ".$t;
		echo "<br>";	
	}
	$count++;
}

?>
</article>

</div>

</body>
</html>