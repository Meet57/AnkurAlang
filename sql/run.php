<?php
	include_once("../assets/conn.php");	

	$sql = $_POST['sql'];

	if ($conn->query($sql) === TRUE) {
        echo "New Query created successfully";
        header("refresh:1;url=index.html");   
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
      

	$conn->close();
?>
