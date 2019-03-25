<?php

    include "utility.php";
    $str= readline("enter string:\n");
    $n = strlen($str);
    echo $n."\n"; 
    utility::Permutation($str, 0, $n);

?>
