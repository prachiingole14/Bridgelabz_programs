<?php

    include "util.php";

     // call method from util class to initilize array
    $arr = util::ArrayInit();

     // call method from util class to implement merge sort
    $arr=util::mergesort($arr);

    echo "sorted array is : ";
    
     // call method from util class to display array
    echo implode(',',$arr)."\n";
    
?>