<?php

    include  "util.php";

     // call method from util class to initilize array
    $arr = util::ArrayInit();

    //calculate lenght of array
    $len = sizeof($arr); 

     // call bubble sort method from util class
    util::bubbleSort($arr); 
    
    echo "Sorted array :\n"; 
    // display array
    for ($i = 0; $i < $len; $i++) 
        echo $arr[$i]."\n "; 
    
?>