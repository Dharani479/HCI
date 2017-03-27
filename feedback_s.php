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
</head>
<body>

<div class="container">

<header>
   <h1>Students List</h1>
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
<h2 style="text-align:center">Feedback</h2>
<form action="feedback_action.php" method="post">
	1.Overall Rating of the course<br>
	<input type="radio" id="c_rate" name="c_rate" value="5" checked> Excellent<br>
	<input type="radio" id="c_rate" name="c_rate" value="4"> Very good<br>
	<input type="radio" id="c_rate" name="c_rate" value="3"> Good<br>
	<input type="radio" id="c_rate" name="c_rate" value="2"> Fair<br>
	<input type="radio" id="c_rate" name="c_rate" value="1"> Poor<br><br>
	
	2.Overall Rating of the teacher<br>
	<input type="radio" name="t_rate" id="t_rate" value="5" checked> Excellent<br>
	<input type="radio" name="t_rate" id="t_rate" value="4"> Very good<br>
	<input type="radio" name="t_rate" id="t_rate" value="3"> Good<br>
	<input type="radio" name="t_rate" id="t_rate" value="2"> Fair<br>
	<input type="radio" name="t_rate" id="t_rate" value="1"> Poor<br><br>
	
	3.The teacher demonstrated knowledge of the subject matter<br>
	<input type="radio" name="t_k" id="t_k" value="1" checked> Strongly Disagree
	<input type="radio" name="t_k" id="t_k" value="2"> Disagree
	<input type="radio" name="t_k" id="t_k" value="3"> Neutral
	<input type="radio" name="t_k" id="t_k" value="4"> Agree
	<input type="radio" name="t_k" id="t_k" value="5"> Strongly Agree<br><br>
	
	4.The teacher was effective in communicating the content of the course<br>
	<input type="radio" name="t_c" id="t_c" value="1" checked> Strongly Disagree
	<input type="radio" name="t_c" id="t_c" value="2"> Disagree
	<input type="radio" name="t_c" id="t_c" value="3"> Neutral
	<input type="radio" name="t_c" id="t_c" value="4"> Agree
	<input type="radio" name="t_c" id="t_c" value="5"> Strongly Agree<br><br>
	
	
	5.The course increased my interest in subject<br>
	<input type="radio" name="c_i" id="c_i" value="1" checked> Strongly Disagree
	<input type="radio" name="c_i" id="c_i" value="2"> Disagree
	<input type="radio" name="c_i" id="c_i" value="3"> Neutral
	<input type="radio" name="c_i" id="c_i" value="4"> Agree
	<input type="radio" name="c_i" id="c_i" value="5"> Strongly Agree<br><br>
	
	6.The course correspond to my expectations<br>
	<input type="radio" name="c_e" id="c_e" value="1" checked> Strongly Disagree
	<input type="radio" name="c_e" id="c_e" value="2"> Disagree
	<input type="radio" name="c_e" id="c_e" value="3"> Neutral
	<input type="radio" name="c_e" id="c_e" value="4"> Agree
	<input type="radio" name="c_e" id="c_e" value="5"> Strongly Agree<br><br>
	
	7.The course materials were appropriate and clear<br>
	<input type="radio" name="c_m" id="c_m" value="1" checked> Strongly Disagree
	<input type="radio" name="c_m" id="c_m" value="2"> Disagree
	<input type="radio" name="c_m" id="c_m" value="3"> Neutral
	<input type="radio" name="c_m" id="c_m" value="4"> Agree
	<input type="radio" name="c_m" id="c_m" value="5"> Strongly Agree<br><br>
	
	<input type="submit" style="margin-left:25%" value="Submit">
	
</form>
</article>

</div>

</body>
</html>