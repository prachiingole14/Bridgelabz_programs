<?php

        $hn=0;
        $n=readline("Enter size of n :");
        for($i=1;$i<=$n;$i++)
        {
            $hn=$hn+1/$i;
            echo "1/".$i."+";
        }
        echo "=".$hn."\n\n";
?>