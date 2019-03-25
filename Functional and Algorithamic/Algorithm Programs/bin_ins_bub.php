<?php

    include "util.php";

   // binarySearch method for integer and String
            // call binary search method from util class
            util::binarySearch();


   // insertionSort method for integer and String
            // call method from util class to initilize array
            $arr = util::ArrayInit();
            
            //calculate lenght of array
            $n = sizeof($arr); 

            // call method from util class 
            util::insertionSort($arr, $n); 
            
            echo "sorted array is:\n";
            // call method from util class to print array
            util::printArray($arr, $n); 


    //bubbleSort method for integer and String
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