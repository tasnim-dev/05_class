<?php 
    
    echo "<h2>Even number print using while..loop</h2>";

    $modulas = 1;
    while($modulas<=10){
        if($modulas%2 == 0){
            echo $modulas. "<br>";
        }
        $modulas++;
    }
?>

<?php

    echo "<h2>Odd number print using while..loop</h2>";

    $modulas = 1;
    while($modulas<=10){
        if($modulas%2 !== 0){
            echo $modulas. "<br>";
        }
        $modulas++;
    }





?>