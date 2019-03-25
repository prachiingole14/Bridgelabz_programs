<?php
/*
    @ Author Pr@chi
    @ Date 03/03/2019
    Description: Program that takes the month and year as command-line arguments and
                    prints the Calendar of the month.
 */

 // Running the calender Using Queue
 
    include "Utility.php";

    //Taking Month And Year from user
    echo "Enter Month ";
    $month = Utility::integer_Input();

    //validating month
    while ($month > 12) 
    {
        echo "enter correct month ";
        $month = Utility::integer_Input();
    }

    echo "Enter Year ";
    $year = Utility::integer_Input();
    //validating year
    while ($year < 1000) 
    {
        echo "enter correct year ";
        $year = Utility::integer_Input();
    }

    //Calculating the starting day of the month
    $start = Utility::day_of_week_cal(1, $month, $year);

    //Calculating the ending day of the month
    $totalDays = Utility::calTotal($month, $year);
    
    //calling method to print calender using queue
    Utility::calenderQueue($totalDays,$start);
    echo "\n";
    
?>