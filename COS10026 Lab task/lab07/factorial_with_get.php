<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Factorial</title>
</head>

<body>
<?php 
	include ("mathfunctions.php")
?>
<h1>Factorial</h1>
<?php
		if (isset($_GET["number"])) {
			$num = $_GET["number"];
			
		}
		if (isPositiveInteger($num)) {
			echo "<p>".$num."! is ".factorial($num).".<p>";
			
		}else {
			echo "<p>Please enter a posituve integer.</p>";	
		}
	    echo "<p><a href = 'factorial.html'>Return to the Entry page</a></p>";
?> 
</body>
</html>