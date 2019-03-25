<?php

  /*
	author: Pr@chi
	Description: Write a program  Distance.java  that takes two integer command­line arguments x and y and prints the Euclidean distance from the point (x, y) to the origin (0, 0). The                   formulae   to   calculate   distance   =   sqrt(x*x   +   y*y).   Use   Math.power   function 
  */

	//first value for calculated Euclidean distance
    $x=readline("Enter first value:");

    //second value for calculated Euclidean distance
    $y=readline("Enter power:");

    //calculated Euclidean distance
    $power=pow($x, $x)+pow($y, $y);
    $distace=sqrt($power);
    echo "Distance is:".$distace."\n";
?>