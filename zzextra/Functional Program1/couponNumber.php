<?php


    $no=readline("Enter size of array:\n");
    $new_no=readline("Enter New no:\n");
    echo "array elements are:";
    $i=0;
    while($i<$no)
    {
        $arr[$i]=rand(1,$no)."\n";
        echo $arr[$i];
        $i++;
    }
    
   for($i=0;$i<$no;$i++)
   {
       for($j=$i+1;$j<$no;$j++)
       {
            if($arr[$j]==$new_no)
            {
                continue;
            }
            else
            {
                $arr[$j]=$new_no;
                echo "New array elements are:".$arr[$j]."\n"; 
            }
            
       }
   }

?>