<?php
    $servername = "localhost";
    $username = "u870898135_root";
    $password = "Ankur123.";
    $dbname = "u870898135_ankur";

    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>