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
 
<title>A simple example of uploading a file using PHP script</title>
 
</head>
 
<body>
 
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
$allowedExts = array("pdf", "doc");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if (($_FILES["file"]["type"] == "application/pdf")
|| ($_FILES["file"]["type"] == "application/doc")
&& ($_FILES["file"]["size"] < 200000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    //echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    //echo "Type: " . $_FILES["file"]["type"] . "<br>";
    //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
	  $name=$_FILES["file"]["name"];
	  $path="upload/" . $_FILES["file"]["name"];
	  echo $name;
	  echo $path;
  //echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
  $sql="INSERT INTO download VALUES('$name','$path')";
   if(mysqli_query($conn, $sql))
  header("location: home.php");
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>
</article>
 
</body>
 
</html>