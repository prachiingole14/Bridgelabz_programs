<?php

    /* 
        Author: Pr@chi
        Date: 02/03/2018
        Description: Take an Arithmetic Expression Ensure parentheses must appear 
            in a balanced or not.
    */

   
    //require following function to work  
 //require following function to work  
    //require following function to work  
    include "Stack.php"; 
include "Stack.php"; 
    include "Stack.php"; 
    require "Utility.php";
require "Utility.php"; 
    require "Utility.php";
     
    //creating a new stack
    $stack = new Stack();
    $str = "";

// getting input from user
echo "enter the arithmetic expression\n";
$str = utility::string_Input();

    //pushing and poping from the stack acc to characters
    for($x=0;$x<strlen($str);$x++)
    {
        $ch = $str[$x];
        if($ch == '(')
        {
            $stack->push($ch);
        }
        else if($ch == ')')
        {
            $stack->pop();
        }
    }

    //checking is equation is balanced
    if($stack->isEmpty())
        {
            echo "balanced\n";
        }
    else
        {
            echo "not balanced\n";
        }
?>
