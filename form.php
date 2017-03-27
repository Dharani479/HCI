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
    padding: .5em;
	font-size:20px;
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
	font-size:28px;
}
input {
	height:20px;
}
</style>
</head>
<body>

<div class="container">

<header>
   <h1>Assesment Graphs</h1>
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
<form action="graph.php" method="post">
	<strong>Enter the Rollno</strong><br/>
	<input type="text" name="roll" maxlength="10"><br/>
	<input type="submit" value="Submit"><br/>
</form>
</article>

</div>

</body>
</html>

