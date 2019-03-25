
<?php
/*
    Author: Pr@chi
    Date: 02/03/2018
    Prime Numbers that are Anagram in the Range of 0 - 1000 in a Stack using the Linked List and 
    Print the Anagrams in the Reverse Order
 */
 
    include 'Utility.php';
    echo "The prime numbers between 0 and 1000 are\n" ;

    //calling function in utility to get prime numbers in the range and storing in array
    $array = Utility::prime_Range(0,1000);
    
    //calling function to get anagrams in a stack
    Utility::stack_Anagram($array);
    
  ?>