<?php
include "utility.php";
//read no of rows
    $row=readline("Enter size of array for rows:\n");
//read no of columns
    $col=readline("Enter size of array for columns:\n"); 
//call function from utility class
    utility::ArrayDisplay($m, $n);
?>