<!doctype html>
<html lang = "en">
<head>
<meta charset="utf-8">
<meta name = "Nguyen Nam Tung " content = "Creating web application Lab10 "/>
<title>Retrieve records to HTML</title>
</head>
<body>
<h1>Creating Web Applications - Lab10</h1>
<?php 
    require_once ("settings.php"); #connection info 
    $conn = @mysqli_connect($host,$user,$pwd,$sql_db);
    if (!$conn) {
        #Display an error message 
        echo "<p>Database Connection failure</p>";
       } else {
        #successful connection 
        $sql_table = "cars";
        $query = "SELECT make, model, price FROM cars ORDER BY make, model";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo "<p>Something is wrong with ",$query,"</p>";
        } else {
            #Display the records
            echo "<table border = \"1\">\n";
            echo "<tr>\n"
                ."<th scope = \"col\">Make</th>\n "
                ."<th scope = \"col\">Model</th>\n "
                ."<th scope = \"col\">Price</th>\n "
                ."</tr>\n";
            # retrieve current record pointed by result pointer
            while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>\n";
                echo "<td>",$row["make"],"</td>\n";
                echo "<td>",$row["model"],"</td>\n";
                echo "<td>",$row["price"],"</td>\n";
                echo "</tr>\n";
            }
            echo "</table>\n";
            mysqli_free_result($result);
            mysqli_close($conn);
        }
       }
?>
</body>
</html>