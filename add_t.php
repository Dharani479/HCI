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
   <h1>Add teacher</h1>
</header>
  
<nav>
 <ul>
	 <li><a href="home_a.php">Home</a></li>
	 <li><a href="add_t.php">Add teacher</a></li>
	<li><a href="logout.php">Logout</a></li>
 </ul>
</nav>
<article>
<h2 style="text-align:center">Add teacher</h2>
<form action="add_t_action.php" method="post">
	1.Enter the username<br>
	<input type="text" id="username" name="username" /> <br>
	2.Enter the password<br>
	<input type="password"  id="password" name="password" /><br>
	
	
	<input type="submit" style="margin-left:25%" value="Submit">
	
</form>
</article>

</div>

</body>
</html>