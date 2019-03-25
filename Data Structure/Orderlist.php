<?php

/*
    AUTHOR: Pr@chi
    Date 03/03/2019
    Description: Read .a List of Numbers from a file and arrange it ascending Order in a Linked List. Take user 
    input for a number, if found then pop the number out of the list else insert the number in 
    appropriate position
 */

    //requires the function in below files to work
    require 'LinkedList.php';
    require 'Utility.php';

    //name of the file and opening the file
    $myfile = fopen("file.txt","r") or die("Unable to open file!");

    //reading the file
    $str = fread($myfile,filesize("file.txt"));

    //creating the array of the words
    $arr = explode(" ",$str);
    $list = new LinkedList();

    for($x=0;$x<count($arr);$x++)
    {
        //adding to the list
        $list->add($arr[$x]);
    }

    echo "list of numbers are\n";

    //showing the list
    $list-> printl();
    echo "enter a number\n";
    $num = Utility::integer_Input();

    //searching the element in the list
    if($list->search($num))
        {
            echo "number present in the list\n";
            $list->remove($num);
            echo "modified list\n";
            $list-> printl();
        }
    else
        {
            echo "number not present in the list\n";
            $list->add($num);
            echo "modified list\n";
            $list-> printl();
        }

    $str2 = "";
    $current = $list->front;
            while($current)
            {
                $str2 =$str2.$current->data." ";
                $current = $current->next;
            }

    $myfile = fopen("file.txt","w") or die("Unable to open file!");
    
    //writing back to the file
    fwrite($myfile,$str2);
    fclose($myfile);
?>