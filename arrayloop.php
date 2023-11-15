<?php
    $cities = ["Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos",
              "Bueno Aires", "Cairo", "London"];
    
    foreach($cities as $city){
    echo $city .", <br>";
    }
    
    echo "<br> The sorted cities are";
    sort($cities);
    foreach($cities as $city){
        echo "<br>". $city .", ";
    }

    array_push($cities, "Los Angles", "Calcutta", "Osaka", "Beijing");

    echo "<br>";
    sort($cities);
    foreach($cities as $city){
        echo "<br>". $city .", ";
    }

?>
