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
   <h1>Assignment</h1>
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
<h2 style="text-align:center">Assignment</h2>
<form action="ass_action.php" method="post">
	1.Empty set is<br>
	<input type="radio" id="q1" name="q1" value="1" checked> {}<br>
	<input type="radio" id="q1" name="q1" value="2"> {a}<br>
	<input type="radio" id="q1" name="q1" value="3"> {1,2,3}<br>
	<input type="radio" id="q1" name="q1" value="4"> {a,b,c}<br><br>
	
	
	2.The value of 5 in the number  357.21 is<br>
	<input type="radio" name="q2" id="q2" value="1" checked> 5 tenths<br>
	<input type="radio" name="q2" id="q2" value="2"> 5 ones<br>
	<input type="radio" name="q2" id="q2" value="3"> 5 tens<br>
	<input type="radio" name="q2" id="q2" value="4"> 5 hundreds<br><br>
	
	
	3.In coordinate geometry, the equation of the x-axis is <br>
	<input type="radio" name="q3" id="q3" value="1" checked> y=x<br>
	<input type="radio" name="q3" id="q3" value="2"> y=0<br>
	<input type="radio" name="q3" id="q3" value="3"> x=0<br>
	<input type="radio" name="q3" id="q3" value="4"> y=1<br><br>
	
	
	4.3x - 4(x + 6) =<br>
	<input type="radio" name="q4" id="q4" value="1" checked> x+6<br>
	<input type="radio" name="q4" id="q4" value="2"> -x-24<br>
	<input type="radio" name="q4" id="q4" value="3"> 7x+6<br>
	<input type="radio" name="q4" id="q4" value="4"> -7x-24<br><br>
	
	
	
	5.3 4/5 expressed as a decimal is<br>
	<input type="radio" name="q5" id="q5" value="1" checked> 3.40<br>
	<input type="radio" name="q5" id="q5" value="2"> 3.45<br>
	<input type="radio" name="q5" id="q5" value="3"> 3.50<br>
	<input type="radio" name="q5" id="q5" value="4"> 3.80<br><br>
	
	
	6.Which of the following is the Highest Common Factor of 18, 24 and 36?<br>
	<input type="radio" name="q6" id="q6" value="1" checked>6<br>
	<input type="radio" name="q6" id="q6" value="2"> 18<br>
	<input type="radio" name="q6" id="q6" value="3"> 36<br>
	<input type="radio" name="q6" id="q6" value="4"> 72<br><br>
	
	
	7. Items bought by a trader for $80 are sold for $100. The profit expressed as a percentage of cost price is<br>
	<input type="radio" name="q7" id="q7" value="1" checked> 2.5%<br>
	<input type="radio" name="q7" id="q7" value="2"> 20%<br>
	<input type="radio" name="q7" id="q7" value="3"> 25%<br>
	<input type="radio" name="q7" id="q7" value="4"> 50%<br><br>
	
	
	<input type="submit" style="margin-left:25%" value="Submit">
	
</form>
</article>

</div>

</body>
</html>