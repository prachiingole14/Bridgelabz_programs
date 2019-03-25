<?php
 /* 
        Author: Pr@chi
        Date: 02/03/2018
        Description: Number of Binary Search Tree to find BFS nodes.
*/

    include "Utility.php";

        echo "enter the number of nodes  of a Tree\n";
        $num = Utility::integer_Input();
        /**
         * calculating $numerator value of formulea
         */
        $numerator =  BinarySearchTree::factorial(2 * $num);
        /**
         * calculating  $denominator  vlaue of formulea
         */
        $denominator =  BinarySearchTree::factorial($num + 1) *  BinarySearchTree::factorial($num);
        /*
          calculating number of nodes
         */
        $Nodes = floor($numerator / $denominator);
        echo "number of nodes possible are \n" . $Nodes . "\n";
?>