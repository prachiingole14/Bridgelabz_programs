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

    static function getelement1()
    {
        $n=readline();
    }

    static function flipcoin()
    {
        $n=utility::flipcoin();
        for($i=0;$i<$n;$i++)
        {
            echo rand(0, 1)."\n";
            if($n<0.5)
            {
                $cunt1=0;
                $cunt1++;
                $pertail= ($cunt1/$no)*100;
            }

            else
            {
                $cunt2=0;
                $cunt2++;
                $perhead= ($cunt1/$no)*100;
                echo $perhead;
            }
        }
      echo "Percentage of tails:".$pertail;
      echo "Percentage of heads:".$perhead;
    }



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

    //power of 2

    static function PowerofTwo()
    {
        $power=1;

        $num=readline("Enter size of number :");
        if(!preg_match('/^[0-9]/',$num))
        {
            echo "Enter valid option...\n";
        }
        else
        {
            for($i=0;$i<$num;$i++)
            {
                echo "2^".$i." = ".$power."\n";
                $power=$power*2;
            }
        }
    } 


}
   
?>