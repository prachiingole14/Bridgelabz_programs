<?php

    include "utility.php";

    //define length of array
     $len=readline("Enter size of array :\n");
     // store initilize array in variable A and pass parameter lengh of array
     $A =utility::ArrayInit($len);
     //sum of three no
     utility::SumofNumbers($A, $len);
    

?>