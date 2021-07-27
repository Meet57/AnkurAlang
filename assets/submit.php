<?php
    include_once("conn.php");

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $num = $_POST["num"];
    $companyname = $_POST["companyname"];
    $yourcity = $_POST["yourcity"];
    $message = $_POST["message"];

    $sql = "INSERT INTO `contact` (`Id`,`First Name`, `Last Name`, `Email`,`Number`,`Company Name`,`Your City`,`Message`) VALUES (NULL,'$firstname', '$lastname', '$email','$num','$companyname','$yourcity','$message')";

    if ($conn->query($sql) === TRUE) {
        
        echo "<script>window.close();</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
       
    }
    
    $conn->close();
    

?>