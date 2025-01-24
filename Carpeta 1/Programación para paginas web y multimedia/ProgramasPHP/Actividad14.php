<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 14</title>
</head>
<body>
    <?php

    // DATOS
    $servername = "localhost";
    $username = "Pablo";
    $password = "";
    $DB = "test";


    // MySQLi Object-Oriented

    // Create connection
    $connOO = new mysqli($servername, $username, $password);

    // Check connection
    if ($connOO->connect_error) {
        die("Connection failed (MySQLi Object-Oriented): " . $connOO->connect_error. "<br>");
    }
    echo "Connected successfully (MySQLi Object-Oriented) <br>";

    // MySQLi Procedural

    // Create connection
    $connProce = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$connProce) {
        die("Connection failed (MySQLi Procedural): " . mysqli_connect_error(). "<br>");
    }
    echo "Connected successfully (MySQLi Procedural) <br>";
    
    //PDO

    try {
        $connPDO = new PDO("mysql:host=$servername;dbname=$DB", $username, $password);
        // set the PDO error mode to exception
        $connPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully (PDO)";
    } catch(PDOException $e) {
        echo "Connection failed (PDO): " . $e->getMessage();
    }
    
    ?>
</body>
</html>