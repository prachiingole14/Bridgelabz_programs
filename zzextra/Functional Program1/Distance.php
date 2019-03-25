<?php

  
    $x=readline("Enter first value:");
    $y=readline("Enter power:");
    $power=pow($x, $x)+pow($y, $y);
    $distace=sqrt($power);
    echo "Distance is:".$distace."\n";
?>