<?php

/* 
    Author: Pr@chi
    Description: take no of columns and rows from user and display its proper format
*/


include "utility.php";                                       //include class utility

    $row=readline("Enter size of array for rows:\n");       //enter no of rows
    $col=readline("Enter size of array for columns:\n");    //enter no of columns
    utility::ArrayDisplay($row, $col);                      //call function ArrayDisplay from utulity class 
?>