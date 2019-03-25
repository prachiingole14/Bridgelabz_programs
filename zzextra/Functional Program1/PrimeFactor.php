<?php

    function primeFactors($n) 
    { 
        while($n % 2 == 0) 
        { 
            echo 2," "; 
            $n = $n / 2; 
        } 

        for ($i = 3; $i <= sqrt($n); $i = $i + 2) 
        { 
            while ($n % $i == 0) 
            { 
                echo $i," "; 
                $n = $n / $i; 
            } 
        } 
  
        if ($n > 2) 
            echo $n,"\n "; 
    } 
    
    $n=readline("Enter number for Factor:");
    primeFactors($n);
    return 0;
?>