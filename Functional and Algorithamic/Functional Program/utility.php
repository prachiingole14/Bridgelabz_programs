<?php

class utility
{
    
    // for two diamention array class....
        function ArrayDisplay($row, $col)
        {
            for($i=0;$i<$row;$i++)
                {
                    for($j=0;$j<$col;$j++)
                    {
                        $arr[$i][$j]=readline();
                    }
                }

            for($i=0;$i<$row;$i++)
                {
                    for($j=0;$j<$col;$j++)
                    {
                        echo $arr[$i][$j]." ";
                    }
                    echo"\n";
                }
        } 



    // Sum of 3 array elemnts exactly equal to 0................
       
        static function SumofNumbers($A, $len) 
        {  
           
            $sum=0;
            // Fix the first element as A[i] 
            for ($i = 0; $i < $len - 2; $i++) 
            {
                // Fix the second element as A[j] 
                for ($j = $i + 1; $j < $len - 1; $j++) 
                { 
                    // Now look for the third number 
                    for ($k = $j + 1; $k < $len; $k++)
                    { 
                        if ($A[$i] + $A[$j] + $A[$k] == $sum) 
                        { 
                            echo $A[$i].$A[$j].$A[$k]."\n"; 
                            return true; 
                        }   
                    } 
                }  
            } 
            // If we reach here, then no triplet was found 
            return false; 
        } 

  


//common to all class for reading array..........
        static function ArrayInit($len)
        {
            for($i=0;$i<$len;$i++)
            {
                $A[$i]=readline();
            }

            return $A;
        }


        //Permutation program

        static function Permutation($str, $st, $n)
        {
            $st=0;
            $n=$n-1;
           
            for ($i = $st; $i <= $n; $i++) 
                {
                    $str1 = utility::swap($str, $st, $n); 
                    utility::Permutation($str, $st + 1, $n); 
                    $str1 = utility::swap($str, $st, $n);
                  echo"\n";
                }         
            
        }

        static function swap($a, $i, $j) 
        { 
            $temp; 
            $charArray = str_split($a); 
            $temp = $charArray[$i] ; 
            $charArray[$i] = $charArray[$j]; 
            $charArray[$j] = $temp; 
           
            echo implode($charArray)."\n"; 
            
        } 


    //Flip Coin....
        

    //QUADRATIC EQUATION............

    static function geta()
    {
        $a=readline("Enter value for a:\n");
    }

    static function getb()
    {
        $b=readline("Enter value for b:\n");
    }

    static function getc()
    {
        $c=readline("Enter value for c:\n");
    }

    static function quadratic()
    {
     $a=utility::geta();
     $b=utility::getb();
     $c=utility::getc();
     $quad = $b * $b - 4 * $a *$c;
     if( $quad > 0)
           {
           echo "Roots are real and unequal";
           $root1 = ( - $b + sqrt( $quad))/(2*$a);
           $root2 = (-$b - sqrt( $quad))/(2*$a);
           echo "First root is:".$root1;
           echo "Second root is:".$root2;
         }
         
         else if($quad == 0)
               {
                   echo "Roots are real and equal\n";
                   $root1 = -$b+sqrt($quad)/(2*$a);
                   echo "Root:".$root1;
               }
               else
                     {
                         echo "Roots are imaginary\n";
                     }
    }



    // leap year............

    static function leapyear()
    {
        $year=readline("Enter Year:");
   
            if($year>=1582)
                {
                    if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0)
                        {
                            echo $year." is a leap year.\n";
                        }
                    else
                        {
                            echo $year." is not a leap year.\n";
                        }
                }  
                else
                {
                    echo "Enter valid year...!";
                }
  
    }


    //glamber bet...............

    static function glamber()
    {

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

    }



// power of 2
    static function power()
    {
        $power=1;
        $n=readline("Enter size of n :");
        echo $n."\n";
        for($i=0;$i<$n;$i++)
        {
            echo "2^".$i." = ".$power."\n";
            $power=$power*2;
        }
    }



// prime factor

     function primeFactors($n) 
    { 
        while($n % 2 == 0) 
        { 
            echo 2," "; 
            $n = $n / 2; 
        } 

        for ($i = 3; $i <= sqrt($n); $i = $i + 2) 
        { 
            while ($n % $i == 0) 
            { 
                echo $i," "; 
                $n = $n / $i; 
            } 
        } 
  
        if ($n > 2) 
            echo $n,"\n "; 
        return 0;
    } 


//windchill..............

    static function windchill()
    {
        $t=readline("Enter Temprature:\n");
        $v=readline("Enter Speed:\n");
        echo "Enter value for a and b:\n";
        $a=readline();
        $b=readline();

        if(t<=50 &&( v>=3 && v<=120))
        {
            $WindChill= 35.74 + 0.6215*$t + (0.4275*$t - 35.75) * pow($a,$b);
            echo "WindChill is:".$WindChill."\n";
        }
        else
        {
            echo "Enter valid input......\n\n";
        }
    }
}
   
?>