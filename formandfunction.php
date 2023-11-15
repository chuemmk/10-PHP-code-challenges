<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form and Function</title>
</head>
<body>
    <form input = "formandfunction.php" method = "POST">
    <label>width</label>
    <input type = "text" name = "width" id = "width">
    <label>height</label>
    <input type = "text" name = "height" id = "height">
    <button type = "submit">Calculate Area</button>
    </form>

    <?php
     include "area.php";

     if($_SERVER["REQUEST_METHOD"] == "POST")
     {
        $width = $_POST["width"];
        $height = $_POST["height"];
        $result = rectangleArea($height, $width);
        echo $result;
     }

    ?>
</body>
</html>