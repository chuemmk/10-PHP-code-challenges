<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responding to a PHP form</title>
</head>
<body>
    <form action = "formrespond.php" method = "POST">
    <label>Enter your name</label>
    <input type = "text" name = "name" id = "name">
    <input type = "submit"></input>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST["name"];
        echo "Hi your name is $name";
    }
    ?>
</body>
</html>