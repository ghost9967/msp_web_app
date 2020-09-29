<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Sniglet&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.css">
	<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/0b14d520fa.js" crossorigin="anonymous"></script>
	<!---User Defined Section--->
	<script type="text/javascript">
		<?php
		if(isset($_GET['region']))
		{	
			echo "google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
       function drawChart() 
       {
       	var data = google.visualization.arrayToDataTable([
          ['Crop', 'Production'],
          ['Black Gram',     2],
          ['Rice',      22],
          ['Wheat',  12],
          ['Chana', 5],
          ['Rajma',    5]
        ]);
        var options = {
          title: 'Crop MSP'
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }	
        ";
    }
    else
    {
    	echo "<h2>Select Region First</h2>";
    }?>
		//google.charts.load('current', {'packages':['corechart']});
      //google.charts.setOnLoadCallback(drawChart);

      //function drawChart() {

        /*var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'Crop MSP'
        };*/

        //var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        //chart.draw(data, options);
	</script>
	<!---User Defined Section Ends--->
	<noscript>Please enable Javascript</noscript>
	<style type="text/css">
			body
		{
			padding: 10px;
			margin: 2px;
			overflow: hidden;
			font-family: 'Sniglet', cursive;
			background-image: url('https://www.solvay.com/sites/g/files/srpend221/files/styles/header/https/media.solvay.com/medias/domain1446/media403/61160-8sbe5pbpfw.jpg?itok=J8bcCEpd');
			background-size: cover;
			background-attachment: fixed;
			background-repeat: no-repeat;
			background-color: linear-gradient(90deg , black , green);
		}
		a
		{
			text-decoration: none;
			color: white;
			transition: 0.15s;
		}
		a:link
		{
			text-decoration: none;
			color: white;
		}
		a:hover
		{
			color: rgba(255,23,0,0.65);
			text-shadow: 2px 2px black;
		}
		.sb
		{
			height: 97%;
			width:  98%;
			border-radius: 25px;
			background-color: rgba(0,0,0,0.65);
			color: white;
			position: absolute;
		}
		.center
		{
			top: 15%;
			position: relative;
		}
		.otp
		{

			padding: 5px;
			margin: 10px;
			border-radius: 12px;
			background-color: rgba(0,0,0,0.2);
			color: rgba(255,255,255,0.4);
			border-color: black;
			transition: 0.15s;
		}
		.otp:hover
		{
			background-color: rgba(203,0,0,0.2);
			color: white;
			text-shadow: 2px 2px black;
			border-color: red;
		}
		input
		{
			padding: 5px;
			margin: 10px;
			border-radius: 12px;
			background-color: rgba(0,0,0,0.2);
			color: white;
			border-color: black;
			transition: 0.15s;
			width:auto;
		}
		i
		{
			text-shadow: 1px 1px red;
		}
		input:hover
		{
			border-color: red;
			color: red;
			text-shadow: 2px 2px black;
		}
		input[type="submit"]
		{
			background-color: rgba(203,0,0,0.3);
			color: white;
		}
		input[type="submit"]:hover
		{
			background-color: rgba(2,203,0,0.3);
		}
		footer
		{
			position: relative;
			top: -70px;
		}
		header
		{
			position: relative;
  			top: 5%;
  			font-family: 'Merriweather', serif;
  			text-shadow: 2px 2px black;
  			transition: 0.5s;
		}
		header:hover
		{
			color: rgba(150, 253, 239, 0.81);
		}
		@media only screen and (max-width : 423px) 
		{
		    body
		    {
		    background-size: auto;
		    }
		    .sb
		    {
		        background-color: rgba(0,0,0,0.85);
		    }
		    input
		    {
		        border-color: red;
		    }
		    .otp
		    {
		        border-color: red;
		    }
        }
		#pwd
		{
			display: none;
		}
		#go
		{
			display: none;
		}
		#sotp
		{
			display: inline-block;
		}
		#logout
		{
			padding: 2px;
			border-color: red;
			color: red;
			text-shadow: 2px 1px black;
			border-radius: 25px;
		}
		#log
		{
			top: 40px;
			position: relative;
		}
		#admin:hover
		{
			color: rgb(255, 204, 0);
		}
	</style>
	</head>
	<body>
		<section class="sb">
	<header><h1><center>Dynamic MSP Predictor</center></h1></header>
	<div id="log"><center>
		<?php
		if(isset($_GET['region']))
		{
        echo $_GET['region'];
    }
    else
    {
    	echo "Please Select Region First(Improper Channel)";
    }
		?>
		<?php if(isset($_SESSION['id']))
	{
		echo 'Welcome '.$_SESSION['id'];
		echo "<br><a href='/mp/logout' id='logout'>Logout</a><br><br>";
		echo "";
	}
	 ?>
	 <div id='piechart' style='width: 900px; height: 500px;'></div>
</center>
	<div>
	<section class="center">
		<center>
			<br>
			<br>
			
	</center>
	</section>
	<br>
	<br>
	<footer>
		<center>
		Designed in a <span style="color: rgb(255, 204, 0);"><i class="fas fa-bolt"></i></span> by <a id="admin" href="https://arpansarkar.online">Sarkar &amp; Paul</a> &copy; | Copyright <span id="copy"></span></center>
		<!---Date Function--->
		<script type="text/javascript">var d = new Date();
		var y = d.getFullYear(); 
		document.getElementById("copy").innerHTML = y;
		</script>
		<!---Date Function Ends--->
	</footer>
</section>
	</body>
</html>