<?php

    include_once('./assets/conn.php');

    $sql = "SELECT stock_number,category,model,make,name FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "'".$row['category'].",".$row['name'].",".$row['make'].",".$row['stock_number']."',<br>";
        }
    } else {
        echo '0 results';
    }
    $conn->close();

?>
