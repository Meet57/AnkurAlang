<?php
	include_once("../assets/conn.php");	


	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM products";

	$result = $conn->query($sql);
	$rows = $result->fetch_all(MYSQLI_ASSOC);


	if($result->num_rows > 0) {
		echo '<table border = 5 style="width: 100%" ><tr>';
		foreach ($rows[0] as $columnName => $value) {
			echo '<th>' . $columnName . '</th>';
		}
		echo '</tr>';
		foreach ($rows as $row) {
	  	echo "<tr>";
			
			foreach ($row as $value) {
				echo '<td>' . $value . '</td>';
			}
		}
		echo '</table>';
	}

	$conn->close();
?>
