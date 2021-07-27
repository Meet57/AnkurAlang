<?php
    include_once("conn.php");

    $Cat = $_POST["Category"];
    $Make = $_POST["Make"];
    $Num = $_POST["Number"];
    $Type = $_POST["Type"];
    $Model = $_POST["Model"];

    $sql = "INSERT INTO `productenquiry`(`Category`, `Make`, `Model`, `Type`, `Number`) VALUES ('$Cat','$Make','$Model','$Type','$Num')";

    if ($conn->query($sql) === TRUE) {
        echo "We will reach you soon.";
        echo "<script>window.close();</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>