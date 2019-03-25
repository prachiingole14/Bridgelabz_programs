<?php
    /*
        Author: Pr@chi
        Date: 06/03/2018
        Description: construct an algorithm to input a string of characters and check whether it is a palindrome using Dequeue.
    */

    //require function in the below file to work class containing dequeue and its functions 
    require 'Deque.php'; 
    require 'Utility.php'; 

    //creating new dequeue
    $deque = new Deque();

    //taking user input to search
    echo "enter the string to do palindrome check\n";
    $str = Utility::string_Input();
    $str1 = "";

    //adding string characters to the deque
    for($x=0;$x<strlen($str);$x++)
    {
        $deque->addRear($str[$x]);
    }

    //removing string characters from the deque
    for($x=0;$x<strlen($str);$x++)
    {
        //getting string in reverse order
        $str1 = $str1.($deque->removeRear());
    }

    //checking if passed string and reversed string is equal
    if(strcasecmp($str,$str1)==0)
        {
            echo "palindrome\n";
        }
    else
        {
            echo "not palindrome\n";
        }
?>