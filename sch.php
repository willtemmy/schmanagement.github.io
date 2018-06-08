<!DOCTYPE html>
<html>
<head>
	<title>Ivywild school</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		.motto{
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="motto">
	<h2>IVYWILD SCHOOL</h2>
	<p>"Striving for excellence in everything we do, to serve the society and all"</p>
	</div>
	<?php
$maths="";
$maths=$_POST['math'];

$engs="";
$engs=$_POST['eng'];

$swas="";
$swas=$_POST['swa'];

$phys="";
$phys=$_POST['phy'];

$chems="";
$chems=$_POST['chem'];

$bios="";
$bios=$_POST['bio'];

$geos="";
$geos=$_POST['geo'];

$average=($maths+$engs+$swas+$phys+$chems+$bios+$geos)/7;

echo "<table border=2px solid black;>
<tr>
<th>Subject</th>
<th>Score</th>
</tr>
<tr>
<td>Mathematics</td>
<td>$maths</td>
</tr>
<tr>
<td>English</td>
<td>$engs</td>
</tr>
<tr>
<td>Kiswahili</td>
<td>$swas</td>
</tr>
<tr>
<td>Physics</td>
<td>$phys</td>
</tr>
<tr>
<td>Chemistry</td>
<td>$chems</td>
</tr>
<tr>
<td>Biology</td>
<td>$bios</td>
</tr>
<tr>
<td>Geography</td>
<td>$geos</td>
</tr>
<tr>
<td>Average</td>
<td>$average</>
</table>";

if ($average>80) {
	# code...
	echo "A-Excellent performance";
}
elseif ($average>60) {
	# code...
	echo "B-Very Good";
}
elseif ($average>40) {
	# code...
	echo "C-Good";
}
elseif ($average>20) {
	# code...
	echo "D-Try harder";
}
echo "<br>";
echo "The students average score is $average %";

?>
	<footer style="text-align: center;background-color: black;padding: 25px;font-size: 20px;color: white;">
			Copyright &copy;Ivywild School <br>
			+2554872348 <br>
			&reg;Ivywild School Fraternity
	</footer>

</body>
</html>