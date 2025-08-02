<!doctype html>
<html lang = "en">
<head>
<meta charset="utf-8">
<title>Car Found</title>
</head>
<body>
<?php
    require_once ("settings.php"); #connection info 
    $conn = @mysqli_connect($host,$user,$pwd,$sql_db);
    if (!$conn) {
        #Display an error message 
        echo "<p>Database Connection failure</p>";
       } else {
        $carsearch = trim($_POST["carsearch"]);
        $query = "SELECT * FROM cars WHERE make LIKE '$carsearch%' or model LIKE '$carsearch%'";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo "<p>SQL Operation Unsuccessful</p>";
        } else {
            $row = mysqli_fetch_assoc($result);
            if ($row) {
            echo "<table border = \"1\">\n";
            echo "<tr>\n"
                ."<th scope = \"col\">Car_ID</th>\n "
                ."<th scope = \"col\">Make</th>\n "
                ."<th scope = \"col\">Model</th>\n "
                ."<th scope = \"col\">Price</th>\n "
                ."<th scope = \"col\">Year of Manufacture</th>\n "
                ."</tr>\n";
            while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>\n";
                echo "<td>",$row["car_id"],"</td>\n";
                echo "<td>",$row["make"],"</td>\n";
                echo "<td>",$row["model"],"</td>\n";
                echo "<td>",$row["price"],"</td>\n";
                echo "<td>",$row["yom"],"</td>\n";
                echo "</tr>\n";}
            echo "</table>\n";
        }else {
            echo "<p>No data found</p>";}
        } 
        }

?>
</body>
</html>