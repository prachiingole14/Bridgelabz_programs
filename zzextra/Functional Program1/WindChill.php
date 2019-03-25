<?php

    $t=readline("Enter Temprature:\n");
    $v=readline("Enter Speed:\n");
    echo "Enter value for a and b:\n";
    $a=readline();
    $b=readline();

    if(t<=50 &&( v>=3 && v<=120))
    {
        $WindChill= 35.74 + 0.6215*$t + (0.4275*$t - 35.75) * pow($a,$b);
        echo "WindChill is:".$WindChill."\n";
    }
    else
    {
        echo "Enter valid input......\n\n";
    }
?>