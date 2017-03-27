<?php
    session_start();
    $type=$_SESSION["type"];
    
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
   <h1>Students List</h1>
</header>
  
<nav>
 <ul>
	 <li><a href="home.php">Home</a></li>
	 <li><a href="names.php">Students</a></li>
	 <li><a href="form.php">Graph_students</a></li>
	 <li><a href="graph1.php">Graph_class</a></li>
	 <li><a href="upload.php">Materials</a></li>
	 <li><a href="queries_t.php">Queries</a></li>
	  <li><a href="feedback_t.php">Feedback</a></li>
	<li><a href="logout.php">Logout</a></li>
 </ul>
</nav>

<article>
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
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
	if (!$result) {
        echo 'MySQL Error: ' . mysqli_error();
        exit;
        }
?>
<h3>Student Details</h3>
<table class="table table-hover">
        <tr>
        	<th>RollNo</th>
            <th>Name</th>
			<th>Performance total</th>
        </tr>
<?php
while ($row = mysqli_fetch_array($result))
{
    $tot=(($row["mq1"]+$row["mq2"]+$row["mq3"])*0.15/0.5+($row["ml"])*.05/0.1+($row["eq1"]+$row["eq2"]+$row["eq3"]+$row["eq4"])*0.3+($row["el"])+($row["assignment"])*0.1/0.2+( $row["project"]));
	print"<tr>
	<td> $row[rollno]</td>
	<td> $row[name]</td>
	<td> $tot</td>
	</tr>";
}
?>
</table>
</article>

</div>

</body>
</html>