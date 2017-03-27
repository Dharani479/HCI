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
<h3>Question and Answers</h3>
<form action="queries_t1.php" method="post">
	Answer a Question<br>
<?php
$count=1;
while ($row = mysqli_fetch_array($result))
{
	if($count==1){
	$ans=$row["ans"];
	if($ans==""){
		echo $count.".";
	echo "Question  --  ";
	
	echo $row["ques"];
	echo "<br>";
	echo "Answer  --  ";
	
	echo "<textarea name='answer' id='answer' rows='8' cols='150'>
	</textarea>";
	echo "<br>";
	echo "<br>";
	$count ++;}
	echo '
	<input type="hidden" name="question" value="' . $row["ques"] . '"/>';
}
	
}
?>
	<input type="submit"  value="Submit">
</form>
</article>

</div>

</body>
</html>