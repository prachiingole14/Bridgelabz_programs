<?php
/* 
 @author Pr@chi
 @date: 06/03/2019
 Description: Program that takes the month and year as command-line arguments and prints the Calendar of the month.
 */


//require function in utility.php files
    include "Utility.php";

    // file open in write format
    $myfile = fopen("testfile.txt", "w") or die("Unable to open file!");

    //write a contains on file
    $text="A singly linked list in which values are inserted in either ascending or descending order is called an ordered singly linked list. An unordered singly linked list doesn't have such limitation.\n";
    fwrite($myfile, $text);

    //show file
    echo "file contains....\n";
    $myfile = fopen("testfile.txt", "r") or die("Unable to open file....!");
    $read=fread($myfile,filesize("testfile.txt"));

    //creating the array of the words
    $array = explode(" ",$read);
    $list = new unordered();
    for($x=0;$x<count($array);$x++)
    {
        //adding to the list
        $list->add[$array[$x]];
    }
    echo "list of words are\n";

    //showing the list
    $list-> printl();
    echo "\n";
    echo "enter a string\n";
    $str1 = unordered::string_Input();

     //searching the element in the list
    if($list->search($str1))
        {
            echo "word present in the list\n";
            $list->remove($str1);
            echo "modified list\n";
            $list-> printl();
        }
     else
        {
            echo "word not present in the list\n";
            $list->add($str1);
            echo "modified list\n";
            $list-> printl();
        }
    
    $str2 = "";
    $current = $list->first;
    while($current)
    {
        $str2 =$str2.$current->data." ";
        $current = $current->next;          
    }
        $myfile = fopen("word.txt","w") or die("Unable to open file!");
        //closing file
        fwrite($myfile,$str2);
        fclose($myfile);   
?> 
    
