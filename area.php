<?php
    function rectangleArea($height, $width)
    {
        $area = $height * $width;
        return "This rectangle is $height inches high and $width inches wide and 
                has an area of $area square inches.";
    }

    $height = 4;
    $width = 5;
    $result = rectangleArea($height, $width);
    echo $result;
?>