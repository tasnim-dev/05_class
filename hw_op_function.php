<?php 

    function Operator($a, $b){
        echo "add : ". $a + $b ; echo "<br>";
        echo "sub : ". $a - $b ; echo "<br>";
        echo "mul : ". $a * $b ; echo "<br>";
        echo "div : ". $a / $b ; echo "<br>";
        echo "mod : ". $a % $b ; echo "<br>";
        echo "exp : ". $a ** $b ; echo "<br>";
    }

    Operator(40, 20);


?>