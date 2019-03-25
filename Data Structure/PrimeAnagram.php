<?php
    /*
        Author: Pr@chi
        Date: 06/03/2018
        Description: Prime and Anagrams in the 0 to 1000 range.
             Further store in a 2D Array the numbers that are Anagram and numbers that are not Anagram
    */

    include "Utility.php";

    echo "The prime numbers between 0 and 1000 are " ;
    //calling function in utility to get prime numbers in the range and storing in array

    $arr = utility::prime_Range(0,1000);
    echo "\n";
    
    //to print prime anagrams and non anagrams in 2d array
    utility::prime_Anagram($arr);

?>