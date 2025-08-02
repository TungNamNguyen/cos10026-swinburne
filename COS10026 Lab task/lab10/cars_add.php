<!doctype html>
<html lang = "en">
<head>
<meta charset="utf-8">
<title>Cars Add</title>
</head>
<body>
<?php
    require_once ("settings.php"); #connection info 
    $conn = @mysqli_connect($host,$user,$pwd,$sql_db);
    if (!$conn) {
        #Display an error message 
        echo "<p>Database Connection failure</p>";
       } else {
        $make = trim($_POST["carmake"]);
        $model = trim($_POST["carmodel"]);
        $price = trim($_POST["price"]);
        $yom = trim($_POST["yom"]);
        $make = htmlspecialchars($make);
        $model = htmlspecialchars($model);
        $price = htmlspecialchars($price);
        $yom = htmlspecialchars($yom);
        $sql_table = "cars";
        $query = "INSERT INTO $sql_table(make, model, price, yom) VALUES ('$make','$model','$price','$yom')";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo "<p class = \"wrong\">Something is wrong with ",$query,"</p>";
        } else {
            echo "<p class = \"ok\">Successfully added New Car Record</p>";
       }
       mysqli_close($conn);
    }

?>
</body>
</html>