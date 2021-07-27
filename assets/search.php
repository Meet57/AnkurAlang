<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <?php
        
        
            $myString = $_POST['tags'];
            // echo 'got it';
            // echo $myString;
            $myArray = explode(',', $myString);
            foreach($myArray as $my_Array){
            echo $my_Array[1].'<br>';  
        }
     
    ?>

    <script type="text/javascript">
        window.location.href = 'https://www.google.com'
    </script>

    <?php
      ?>

</body>
</html>


