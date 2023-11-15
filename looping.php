<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
      $currentMonth = date("n");
      
      $summer = [6, 7, 8];
      $fall = [9, 10, 11];
      $winter = [12, 1, 2];
      $spring = [3, 4, 5];
      
      if(in_array($currentMonth, $summer))
      {
        echo "Summer";
      }
      elseif(in_array($currentMonth, $fall))
      {
        echo "Fall";
      }
      elseif(in_array($currentMonth, $winter))
      {
        echo "Winter";
      }
      else{
        echo "Spring";
      }
      ?>
</body>
</html>