<?php


    $stake=readline("Enter stake amount:\n");
    $goal=readline("Enter stake goal amount:\n");
    $trials=readline("Enter stake trials:\n");
    $bets=0;
    $wins=0;

    for ($t = 0; $t < $trials; $t++) 
    {
        $cash = $stake;
        while ($cash > 0 && $cash < $goal) 
        {
            $bets++;
            if (rand() < 0.6) 
            {
                $cash++;  
            }     
            else   
            {
                $cash--;
            }                          
        }
        if ($cash == $goal)
        {
            $wins++;
        }               
    }
    echo $wins." wins of ".$trials;
    $won= 100.0 * ($wins /$trials);
    echo "Percent of games won = ".$won."\n";
    $avg=1.0 * ($bets / $trials);
    echo "Avg of bets = ".$avg."\n";
  
?>