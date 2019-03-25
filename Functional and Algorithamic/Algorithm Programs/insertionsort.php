<?php

        include "util.php";
        // call method from util class to initilize array
        $arr = util::ArrayInit();
        
          //calculate lenght of array
        $n = sizeof($arr); 

         // call method from util class 
        util::insertionSort($arr, $n); 
        
        echo "sorted array is:\n";
         // call method from util class to print array
        util::printArray($arr, $n); 

       
?>