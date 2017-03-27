<?php
    session_start();
    $type=$_SESSION["type"];
    
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  
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
$r = $_POST["roll"];

$sql = "SELECT * FROM students WHERE rollno='$r'";
$result = mysqli_query($conn, $sql);
    // output data of each row
   $row = mysqli_fetch_array($result);
   
?>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }

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
	font-size: 20px;
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
	font-size:24px;
}
  </style>
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		animationEnabled: true,
      	theme: "theme2",
		title:{
			text: "Student Marks Graph of <?php echo $r; ?>"
		},
      	axisY:[{
          lineColor: "#4F81BC",
          tickColor: "#4F81BC",
          labelFontColor: "#4F81BC",
          titleFontColor: "#4F81BC",
          lineThickness: 2,
      	},
        {
          lineColor: "#C0504E",
          tickColor: "#C0504E",
          labelFontColor: "#C0504E",
          titleFontColor: "#C0504E",
          lineThickness: 2,
          
      	}],
		data: [
		{   
			type: "spline", //change type to bar, line, area, pie, etc
			showInLegend: true, 
            name:"Course Objectives",			
			dataPoints: [
				{ x: 1, y: <?php echo $row['mq1']+$row['mq2']+$row['mq3']+$row['ml'];?> },
				{ x: 2, y: <?php echo $row['eq1']+$row['eq2']+$row['project'];?>},
				{ x: 3, y: <?php echo $row['eq3']+$row['project'];?>},
				{ x: 4, y: <?php echo $row['eq4']+$row['project'];?> },
				{ x: 4, y: <?php echo $row['eq1']+$row['eq2']+$row['project'];?> },
				{ x: 6, y: <?php echo $row['assignment'];?> },
				{ x: 7, y: <?php echo $row['eq3']+$row['project'];?> },
				{ x: 8, y: <?php echo $row['eq1']+$row['eq2']+$row['el']+$row['project'];?> }
			]
			},	
			{   
				type: "spline", //change type to bar, line, area, pie, etc
				showInLegend: true, 
	            name:"Test Types",			
				dataPoints: [
					{ x: 1, y: <?php echo $row['eq1']+$row['mq1']+$row['eq2']+$row['ml'];?> },
					{ x: 2, y: <?php echo $row['eq3']+$row['mq2']+$row['mq3']+$row['el']+$row['project'];?>},
					{ x: 3, y: <?php echo $row['mq1']+$row['eq3']+$row['eq4']+$row['assignment'];?>},
					{ x: 4, y: <?php echo $row['project'];?> }

				]
				}	
		],
		legend: {
			cursor: "pointer",
			itemclick: function (e) {
				if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
					e.dataSeries.visible = false;
				} else {
					e.dataSeries.visible = true;
			}
			chart.render();
			}
		}
	});

	chart.render();
}
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/canvasjs.min.js"></script>
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
	  <li><a href="feedback_t.php">Feedback</a></li>
	 <li><a href="logout.php">Logout</a></li>
 </ul>
</nav>
<article>
<div id="chartContainer" style="height: 300px; width: 70%; align=right";></div>
</article>
</div>
</body>
</html>