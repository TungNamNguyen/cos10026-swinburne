<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Booking Confirmation</title>
</head>
	
<body>
	<h1>Rohirrim Tour Booking Confirmation </h1>
<?php 
	if (isset($_POST["firstname"])) {
			$firstname = $_POST["firstname"];
	} else {
		header ("location: register.html");
	}
	
	if (isset($_POST["lastname"])) {
			$lastname = $_POST["lastname"];
	} else {
		header ("location: register.html");
	}
	
	if (isset($_POST["species"])) {
			$species = $_POST["species"];
	} else {
		header ("location: register.html");
	}
	
	if (isset($_POST["age"])) {
			$age = $_POST["age"];
	} else {
		header ("location: register.html");
	}
	$tour = "";
	if (isset($_POST["1day"])) {$tour = $tour."one day tour";}
	if (isset($_POST["4day"])) {$tour = $tour." and four days tour";}
	if (isset($_POST["10day"])) {$tour = $tour." and ten days tour";}
	
	
	if (isset($_POST["food"])) {
		$food = $_POST["food"];
	} else {
		header ("location: register.html");
	}
	
	if (isset($_POST["partySize"])) {
		$partySize = $_POST["partySize"];
	} else {
		header ("location: register.html");
	}
	function sanitise_input($data) {
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
		
	$firstname = sanitise_input($firstname);
	$lastname = sanitise_input($lastname);
	$species = sanitise_input($species);
	$age = sanitise_input($age);
	$food = sanitise_input($food);
	$partySize = sanitise_input($partySize);
	
	$errMSg = "";
	
	if ($firstname == "") {
		$errMSg.= "<p>You must enter your first name. </p>";
	}
	else if (!preg_match("/^[a-zA-Z]*$/", $firstname)) {
		$errMSg.= "<p>Only alpha letter in your first name.</p>";
	}
	if ($lastname == "") {
		$errMSg.= "<p>You must enter your last name.</p>";
	}
	else if (!preg_match("/^[a-zA-Z-]*$/", $lastname)) {
		$errMSg.= "<p>Only alpha letter and hyphen in your last name.</p>";
	}
	if ($age==""){
		$errMSg.= "<p>You must enter something.</p>";
	}
	else if (is_numeric($age) == False){
		$errMSg.= "<p> You must enter a number.</p>";
	}
	else {
		if ($age < 18 or $age > 10000) {
			$errMSg3.= "<p>The number must be in range 18 to 10000.</p>";
		}

	}
	if ($errMSg != ""){
		echo "<p>$errMSg</p>";
	}else {
		echo "<p>Welome ".$firstname." ".$lastname."!</p>";
		echo "<p>You are now booked on the ".$tour."<p>";
		echo "<p>Species: ".$species."<p>";
		echo "<p>Meal Preference: ".$food."<p>";
		echo "<p>Number of traveller: ".$partySize."<p>";
	}

?>
</body>
</html>