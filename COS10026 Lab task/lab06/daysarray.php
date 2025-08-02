<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title> Using PHP variables, Arrays and Operators </title>
	<meta name="description" content="daysarray">
	<meta name="keywords" content ="days">
</head>
<body>
	<h1>PHP Variables, Arrays and Operators</h1>
<?php 
	$days1=array ("Sunday"," Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
	echo "<p> The days of weeks in English are: </p>";
	foreach ($days1 as $values){
    	if ($values === "Saturday") {
        	echo $values.".";}
        else {
			echo $values. ", ";}
     }
	$days=array ("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi"," Vendredi"," Samedi");
	echo "<p> The days of weeks in French are: </p>";
    foreach ($days as $value){
    	if ($value == "Samedi") {
        	echo "Samedi.";}
        else {
			echo $value.", ";}
	}
?>	
</body>
</html>

	