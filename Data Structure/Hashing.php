<?php

     /* 
        Author: Pr@chi
        Date: 06/03/2018
        Description: Create a Slot of 10 to store Chain of Numbers that belong to each Slot to efficiently search a 
                     number from a given set of number
    */

    //require function from the file below to work
    require 'LinkedList.php';
    require 'Utility.php';

    $myfile = fopen("numbers.txt","r") or die("Unable to open file!");
    $str = fread($myfile,filesize("numbers.txt"));

    //explode() split the string
    $numarr = explode(" ",$str);

    //initialize the list array
    $arr = [];
    for($i=0;$i<11;$i++)
        {
        // array containg 11 list objects
            $arr[$i] = new LinkedList();
        }

    for ($i=0;$i<count($numarr);$i++) 
        {
            //adding numbers fetched from the file to array according to its index ie by calculating remainder
            $length = (int)$numarr[$i]%11;
            $arr[$length]->add((int)$numarr[$i]);
        }

    /*
     * function to show the contents of the list as string 
     * @ array the array which has values
     * @return String the value of then array as a string
     */
    function listArr($arr)
        {   
            $str = "";
            for ($i=0;$i<count($arr);$i++) 
            {
                //getting the string of each linked list
                if($arr[$i]->getString()!=null)
                $str .= $arr[$i]->getString()." ";
            }
            return substr($str,0 ,-1)."\n";
        }

    echo "list is ".listArr($arr);
    echo "Enter no to search\n";

    //taking user input
    $num = Utility::integer_Input();
    $res = (int)$num%11;

    //checking if its present in the list using array index got from the number remainder
    if($arr[$res]->search($num))
        {
            echo "number found \n";
            //if found remove
            $arr[$res]->remove($num);
        }
    else
        {
            echo "number not found \n";
            //if not found add to the list
            $arr[$res]->add($num);
            echo "added to the list \n";
        }
        
    $myfile = fopen("numbers.txt","w") or die("Unable to open file ");
    //writing modified array back to the file
    fwrite($myfile,listArr($arr));
    fclose($myfile);
?>