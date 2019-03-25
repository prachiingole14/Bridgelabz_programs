<?php

    /* 
        Author: Pr@chi
        Date: 02/03/2018
        Description: find prime no between 0-1000, and display with in range by using 2D-Array. 
     
    */
    
      //require function in file utlity.php to work 
      include 'Utility.php';
      echo "The prime numbers between 0 and 1000 are " ;
      //calling function in utility to get prime numbers in the range and storing in array
      $arr = utility::prime_Range(0,1000);
      echo "\n";
      //to print prime numbers in 2d array 
        utility::TwoDArray($arr);
    
    ?> 

