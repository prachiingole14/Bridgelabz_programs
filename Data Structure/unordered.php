<?php
/*
  Author: Pr@chi
  Date: 06/03/2018
  Description: Read the Text from a file, split it into words and arrange it as Linked List. Take a user input to
  search a Word in the List. If the Word is not found then add it to the list, and if it found 
  then remove the word from the List. In the end save the list into a file
*/
 
require 'Utility.php';
require_once ('SinglyLinkedList.php');

//name of the file and opening the file
$myfile = fopen("word.txt","r") or die("Unable to open file!");

//reading the file
$str = fread($myfile,filesize("word.txt"));

//creating the array of the words
$arr = explode(" ",$str);
$list = new SinglyLinkedList();

for($x=0;$x<count($arr);$x++)
{
    //adding to the list
    $list->add($arr[$x]);
}

echo "list of words are\n";

//showing the list
$list-> printl();
echo "\n";
echo "enter a string\n";
$str1 = Utility::string_Input();

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

//writing back to the file
fwrite($myfile,$str2);
fclose($myfile);
?>