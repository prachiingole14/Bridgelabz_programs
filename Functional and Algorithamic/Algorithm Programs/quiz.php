<?php
    include "util.php";

     // call method from util class to get value
    $number=util::get_limit_element($num1);

    //calculate power to ind limit
    $limit=pow(2, $number)-1;
    echo "limit is : ".$limit."\n";
    echo "Your search element mus be in range 0-".$limit.".\n";

     // call method from util class to search element
    util::get_search_element($num);
     
    //call method from util class to play game
    util::playgame(0, $limit);
?>
