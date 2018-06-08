<!DOCTYPE html>
<html>
<head>
	<title>Jasons School</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		body{
			background-image: url(library-438389_1920.jpg);
			color: orange;
		}
		form{
			padding: 20px;
		}
		li a{
			padding: 10px;
			border-radius: 5px;
		}
		ul{
			list-style-type: none;
		}
		.motto{
			text-align: center;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container fluid">
			<div class="navbar-header">
				<a href="navbar-brand">Ivywild School</a>
			</div>
			<ul class="navbar-nav">
				<li><a href="schoolhome.php">Home</a></li>
				<li><a href="schboutus.php">AboutUs</a></li>
				<li class="active"><a href="#">Student Information</a></li>
			</ul>
		</div>
	</nav>
	<div class="motto">
	<h2>IVYWILD SCHOOL</h2>
	<p>"Striving for excellence in everything we do, to serve the society and all"</p>
	</div>
	<form action="sch.php" method="POST">
		<label>Student name</label><br>
		<input type="text" name="nme" placeholder="Enter name" required=""><br>
		<label>Student ID</label><br>
		<input type="number" name="id" placeholder="Enter ID number" required=""><br>
		<label>Class</label><br>
		<input type="text" name="clss" placeholder="Enter class" required=""><br>
		<h3><u><b>Subject Score's</b></u></h3>
		<p>Please fill in the following with the respective scores of the student.</p>
		<label>Mathematics</label>
		<input type="number" name="math" required=""><br>
		<label>English</label>
		<input type="number" name="eng" required=""><br>
		<label>Kiswahili</label>
		<input type="number" name="swa" required=""><br>
		<label>Physics</label>
		<input type="number" name="phy" required=""><br>
		<label>Chemistry</label>
		<input type="number" name="chem" required=""><br>
		<label>Biology</label>
		<input type="number" name="bio" required=""><br>
		<label>Geography</label>
		<input type="number" name="geo" required=""><br>
		<input type="submit" name="Submit"><input type="reset" name="Reset">


	</form>
	<footer style="text-align: center;background-color: black;padding: 25px;font-size: 20px;color: white;">
			Copyright &copy;Ivywild School <br>
			+2554872348 <br>
			&reg;Ivywild School Fraternity
	</footer>

</body>
</html>