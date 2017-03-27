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
ar {
    
    
    padding: 1em;
    overflow: hidden;
	text-align: center;
	font-size:19px;
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

$sql = "SELECT * FROM students WHERE rollno='$u'";
$result = mysqli_query($conn, $sql);
    // output data of each row
   $row = mysqli_fetch_array($result);
   
?>
</head>
<body>

<div class="container">

<header>
   <h1>Marks List</h1>
</header>
  
<nav>
 <ul>
	 <li><a href="home_s.php">Home</a></li>
	 <li><a href="graph2.php">Graph</a></li>
	 <li><a href="download_s.php">Materials</a><li>
		 <li><a href="assignment.php">Assignment</a></li>
		  <li><a href="queries_s.php">Queries</a></li>
	 <li><a href="feedback_s.php">Feedback</a></li>
	<li><a href="logout.php">Logout</a></li>
 </ul>
</nav>

<article>
<h3>Marks Details</h3>
<table class="table table-hover">
        <tr>
        	<th>RollNo</th>
            <th>Name</th>
			<th>MQ1</th>
			<th>MQ2</th>
			<th>MQ3</th>
			<th>ML</th>
			<th>EQ1</th>
			<th>EQ2</th>
			<th>EQ3</th>
			<th>EQ4</th>
			<th>EL</th>
			<th>Assignment</th>
			<th>Project</th>
			<th>Performance_total</th>
			
        </tr>
		<tr>
			<td> <?php echo $row['rollno']; ?></td>
			<td> <?php echo $row['name']; ?></td>
			<td> <?php echo $row['mq1']; ?></td>
			<td> <?php echo $row['mq2']; ?></td>
			<td> <?php echo $row['mq3']; ?></td>
			<td> <?php echo $row['ml']; ?></td>
			<td> <?php echo $row['eq1']; ?></td>
			<td> <?php echo $row['eq2']; ?></td>
			<td> <?php echo $row['eq3']; ?></td>
			<td> <?php echo $row['eq4']; ?></td>
			<td> <?php echo $row['el']; ?></td>
			<td> <?php echo $row['assignment']; ?></td>
			<td> <?php echo $row['project']; ?></td>
			<td> <?php echo $row['performance']; ?></td>
			
			</tr>
		
		
		</table>
		<br>
		<br>
		<br>
		<br>
		<ar>
		<?php
		$tot=$row['performance'];
		if($tot < 55) {$p = "Bad";}
		if($tot > 55){$p="Average";}
		if($tot > 65){$p="Good";}
		if($tot >= 75){$p="Excellent";}
		echo "Your overall grade is ".$p;?></ar>
</article>

</div>

</body>
</html>