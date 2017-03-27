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
	 <li><a href="ass_t.php">Assignment</a></li>
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
$sql = "SELECT c_rate FROM feedback";
$result = mysqli_query($conn, $sql);
	if (!$result) {
        echo 'MySQL Error: ' . mysqli_error();
        exit;
        }
		$c_rate=array();
	while ($row = mysqli_fetch_array($result)){
		   array_push($c_rate,$row['c_rate']);
	}
	$sql1 = "SELECT t_rate FROM feedback";
	$result1 = mysqli_query($conn, $sql1);
	if (!$result1) {
	           echo 'MySQL Error: ' . mysqli_error();
	           exit;
	           }
	$t_rate=array();
	while ($row = mysqli_fetch_array($result1)){
	   		   array_push($t_rate,$row['t_rate']);
	   	   }
	$sql2 = "SELECT t_k FROM feedback";
	   	$result2 = mysqli_query($conn, $sql2);
	   	if (!$result2) {
	   	           echo 'MySQL Error: ' . mysqli_error();
	   	           exit;
	   	           }
	   	$t_k=array();
	   	while ($row = mysqli_fetch_array($result2)){
	   	   		   array_push($t_k,$row['t_k']);
	   	   	   }
			   
		   	$sql3 = "SELECT t_c FROM feedback";
		   	$result3 = mysqli_query($conn, $sql3);
		   	if (!$result3) {
		   	           echo 'MySQL Error: ' . mysqli_error();
		   	           exit;
		   	           }
		   	$t_c=array();
		   	while ($row = mysqli_fetch_array($result3)){
		   	   		   array_push($t_c,$row['t_c']);
		   	   	   }
				   
			   	$sql4 = "SELECT c_i FROM feedback";
			   	$result4 = mysqli_query($conn, $sql4);
			   	if (!$result4) {
			   	           echo 'MySQL Error: ' . mysqli_error();
			   	           exit;
			   	           }
			   	$c_i=array();
			   	while ($row = mysqli_fetch_array($result4)){
			   	   		   array_push($c_i,$row['c_i']);
			   	}
			   	$sql5 = "SELECT c_e FROM feedback";
			   	$result5 = mysqli_query($conn, $sql5);
			   	if (!$result5) {
			   	           echo 'MySQL Error: ' . mysqli_error();
			   	           exit;
			   	           }
			   	$c_e=array();
			   	while ($row = mysqli_fetch_array($result5)){
			   	   		   array_push($c_e,$row['c_e']);
			   	}
				
			   	$sql6 = "SELECT c_m FROM feedback";
			   	$result6 = mysqli_query($conn, $sql6);
			   	if (!$result6) {
			   	           echo 'MySQL Error: ' . mysqli_error();
			   	           exit;
			   	           }
			   	$c_m=array();
			   	while ($row = mysqli_fetch_array($result6)){
			   	   		   array_push($c_m,$row['c_m']);
			   	}
		
				function array_count_values_of($value, $array) {
				$counter = 0;
				foreach($array as $va)
				{
				  if($va == $value)
				    $counter = $counter +1;
				}
				$counter= ($counter/count($array)) *100;
				return $counter ;}
				
?>
<h2>Feedback Details</h2>
<br>
<p>1.Overall Rating of the course</p><br>
<p>Excellent - <?php echo array_count_values_of(5, $c_rate); ?></p>
<p>Very Good - <?php echo array_count_values_of(4, $c_rate); ?></p>
<p>Good - <?php echo array_count_values_of(3, $c_rate); ?></p>
<p>Fair - <?php echo array_count_values_of(2, $c_rate); ?></p>
<p>Poor - <?php echo array_count_values_of(1, $c_rate); ?></p><br><br>

<p>2.Overall Rating of the teacher</p><br>
<p>Excellent - <?php echo array_count_values_of(5, $t_rate) ?></p>
<p>Very Good - <?php echo array_count_values_of(4, $t_rate) ?></p>
<p>Good - <?php echo array_count_values_of(3, $t_rate) ?></p>
<p>Fair - <?php echo array_count_values_of(2, $t_rate) ?></p>
<p>Poor - <?php echo array_count_values_of(1, $t_rate) ?></p><br><br>

<p>3.The teacher demonstrated knowledge of the subject matter</p><br>
<p>Strongly Disagree - <?php echo array_count_values_of(5, $t_k) ?></p>
<p>Disagree - <?php echo array_count_values_of(4, $t_k) ?></p>
<p>Neutral - <?php echo array_count_values_of(3, $t_k) ?></p>
<p>Agree - <?php echo array_count_values_of(2, $t_k) ?></p>
<p>Strongly Agree - <?php echo array_count_values_of(1, $t_k) ?></p><br><br>

<p>4.The teacher was effective in communicating the content of the course</p><br>
<p>Strongly Disagree - <?php echo array_count_values_of(5, $t_c) ?></p>
<p>Disagree - <?php echo array_count_values_of(4, $t_c) ?></p>
<p>Neutral - <?php echo array_count_values_of(3, $t_c) ?></p>
<p>Agree - <?php echo array_count_values_of(2, $t_c) ?></p>
<p>Strongly Agree - <?php echo array_count_values_of(1, $t_c) ?></p><br><br>

<p>5.The course increased my interest in subject</p><br>
<p>Strongly Disagree - <?php echo array_count_values_of(5, $c_i) ?></p>
<p>Disagree - <?php echo array_count_values_of(4, $c_i) ?></p>
<p>Neutral - <?php echo array_count_values_of(3, $c_i) ?></p>
<p>Agree - <?php echo array_count_values_of(2, $c_i) ?></p>
<p>Strongly Agree - <?php echo array_count_values_of(1, $c_i) ?></p><br><br>

<p>6.The course correspond to my expectations</p><br>
<p>Strongly Disagree - <?php echo array_count_values_of(5, $c_e) ?></p>
<p>Disagree - <?php echo array_count_values_of(4, $c_e) ?></p>
<p>Neutral - <?php echo array_count_values_of(3, $c_e) ?></p>
<p>Agree - <?php echo array_count_values_of(2, $c_e) ?></p>
<p>Strongly Agree - <?php echo array_count_values_of(1, $c_e) ?></p><br><br>

<p>7.The course materials were appropriate and clear</p><br>
<p>Strongly Disagree - <?php echo array_count_values_of(5, $c_m) ?></p>
<p>Disagree - <?php echo array_count_values_of(4, $c_m) ?></p>
<p>Neutral - <?php echo array_count_values_of(3, $c_m) ?></p>
<p>Agree - <?php echo array_count_values_of(2, $c_m) ?></p>
<p>Strongly Agree - <?php echo array_count_values_of(1, $c_m) ?></p><br><br>


</article>

</div>

</body>
</html>