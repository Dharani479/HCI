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
	text-align: left;
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

$sql = "SELECT * FROM queries";
$result = mysqli_query($conn, $sql);
   
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
	 <li><a href="graph2.php">Graph_class</a></li>
	 <li><a href="download_s.php">Materials</a><li>
		 <li><a href="assignment.php">Assignment</a></li>
		 <li><a href="queries_s.php">Queries</a></li>
	 <li><a href="feedback_s.php">Feedback</a></li>
	<li><a href="logout.php">Logout</a></li>
 </ul>
</nav>

<article>
<h3>Question and Answers</h3>
<form action="queries_s1.php" method="post">
	Post a Question<br>
	<textarea name="question" id="question" rows="8" cols="150">
	</textarea>
	<input type="submit"  value="Submit">
</form>
<br>
<h2>Updated Questions and Answers</h2>
<?php
$count=1;
while ($row = mysqli_fetch_array($result))
{
	
	$ans=$row["ans"];
	if(!empty($ans)){
		echo $count.".";
	echo "Question  --  ";
	
	echo $row["ques"];
	echo "<br>";
	echo "Answer  --  ";
	
	echo $row["ans"];
	echo "<br>";
	echo "<br>";
	$count ++;}
}
?>
</article>

</div>

</body>
</html>