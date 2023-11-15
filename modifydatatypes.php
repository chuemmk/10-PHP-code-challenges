<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifying Data Types</title>
</head>
<body>
    <?php
       $variable = "hello";
       echo "This is a ". gettype($variable) ."<br>";

       $variable = 3.2;
       echo "This is a ". gettype($variable) ."<br>";

       $variable = false;
       echo "This is a ". gettype($variable) ."<br>";

       $variable = 3;
       echo "This is a ". gettype($variable) ."<br>";

       $variable = null;
       echo "This is a ". gettype($variable) ."<br>";
    ?>
</body>
</html>