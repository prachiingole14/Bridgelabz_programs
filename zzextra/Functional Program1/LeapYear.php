<?php

    $year=readline("Enter Year:");
   
    if($year>=1582)
        {
	        if($year % 4 == 0 && $year % 400 == 0)
		        {
		            echo $year." is a leap year.\n";
		        }
	        else
		        {
		            echo $year." is not a leap year.\n";
		        }
        }  
        else
        {
        	echo "Enter valid year...!";
        }

?>