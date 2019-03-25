<?php

    class util
    {
        static function getstr1()
        {
           global  $s1;
           $s1=readline();
            return $s1;
        }  
        
        static function getstr2()
        {
            global $s2;
            $s2=readline();
            return $s2;
        }

        static function anagram()
        {
            $len1=strlen(util::getstr1());
            $len2=strlen(util::getstr2());
            if($len1==$len2)
            {
                for($i=0;$i<$len1;$i++)
                {
                    for($j=$i+1;$j<$len1;$j++)
                    {
                        if($s1[$i]==$s2[$j]);
                            echo "Given two strings are anagram:\n";
                    }
                }
            }
            else
            {
                echo "Given two string are not anagram:\n";
            }
        }


        //PRIME NO......

        static function Prime()
        { 
            echo "Prime no between 0-1000 are:\n";
            for($i=2;$i<=1000;$i++)
            { 
                $counter=0;
               for($j=2;$j<$i;$j++)
               {

                   if($i%$j==0)
                   {
                       $counter++;
                       break;
                   }
                  
               } 
               if($counter==0)
               echo $i." ";
            } 
        }



        // Check given prime no is anagram and palindrom or not......
static $prime;

        static function checkprime()
        { 
            $prime=readline("enter any no to cheak no is prime or not");
            for($i=2;$i<1000;$i++)
            { 
                $counter=0;

               for($j=2;$j<$i;$j++)
               {
                   if($i%$j==0)
                   {
                       $counter++;
                       break;
                   }
               } 

               if($counter==0)
               {
                   if($i==$prime)
                    echo $i." is prime ";
                    util::palindrom($prime);
                    util::checkanagram($prime);
                }

            } 
        }

       

        static function palindrom($prime)
        {
            $len=strlen($prime);
            $sum=0;
            $temp=$prime;
            for($i=0;$i<$len;$i++)
            {
                $digit = $temp % 10;
                $sum = $sum*10 + $digit;
                $temp = $temp/10;
            }

            if($sum==$prime)
            {
                echo " is palindrom.\n";
            }
            else
            {
                echo " is not-palindrom.\n";
            }
        }

        static function checkanagram($prime)
        {
           $len1=strlen($prime);
           
            {
                for($i=0;$i<$len1;$i++)
                {
                    for($j=$len;$j<$len1;$j--)
                    {
                        if($prime[$i]==$prime[$j])
                        {
                            echo " is anagram:\n";
                        } 
                        else
                        {
                            echo " is not anagram:\n";
                        }  
                    }
                }
            }

            if (count_chars($string_1, 1) == count_chars($string_2, 1)) 
            return 'yes'; 
        else 
            return 'no'; 
        }



        static function getprincipal()
            {
                $principal=readline("Enter amount for pricipal:\n");
            }

        static function getyear()
            {
                $year=readline("Enter year:\n");
            }

        static function getrate()
            {
                $rate=readline("Enter rate:\n");
            }

        static function payment()
            {
                
                $p=util::getprincipal();
                $r=util::getrate();
                $y=util::getyear();

                $r = ($r / 100) / 12;   // monthly interest rate
                $n = 12 * $y; 
                $payment  = ($p * $r) / (1 - pow(1+$r, $n));
                $interest = $payment * $n - $p;

                echo "Monthly payments = ".$payment."\n";
                echo "Total interest   = ".$interest."\n";
            }

 
    
        //TEMPERATURE CONVERSION............
           
        static function gettemp1()
        {
            $t1=readline();
        } 

        static function gettemp2()
        {
            $t2=readline();
        } 

        static function temperature()
        {
            $temp1=util::gettemp1();
            $fahrenheit=($temp1*9)/5+32;
            echo "After converting fahrenheit temperature will be:".$fahrenheit."\n";
            
            echo "Enter temperature in fahrenheit:"."\n";
            $temp2=util::gettemp2();
		    $celsius=($temp2-32*5)/9;
		    echo "After converting celsius temperature will be:".$celsius."\n";
        }



        //Question to find your number..........
        public static $num;
        static function get_limit_element( $num)
        {
            $num1=readline("Enter no for calculating limit:\n");
            return $num1;
        }

        static function get_search_element( $num)
        {
           $num=readline("Enter any no for search no:\n");
            return $num;
        }
     
        
       public static $answer;
       public static $mid;


        static function quiz($mid)
        {

            echo "no is greater than ".floor($mid)."..?"."\n";
            echo" 1. Yes \n 2. No \n ";
        }

        static function playgame($high, $low)
        {
            $mid=($high+$low)/2;
            util::quiz($mid);
            $answer=readline("Answer is: \n");
            switch($answer)
            {
                case 1: if($num<$mid)
                        {
                            $high=$mid;
                            util::playgame($high, $low);
                                continue;
                        }

                case 2: if($num>$mid)
                        {
                           $low=$mid;
                            util::playgame($high, $low);
                            if($mid!=$num)
                            {
                                util::playgame($high, $low);
                                continue;
                            }
                               
                        }

                default: echo "guess number is:".floor($mid)."\n";
                            break;

                    
            }
        }



        //common to all class for reading array..........
        static function ArrayInit()
        {
            $len=readline("Enter size for an array: \n");
            for($i=0;$i<$len;$i++)
            {
                $A[$i]=readline();
            }

            return $A;
        }


    // BINARY SEARCH FOR INTEGER ARRAY AND CHARACTER ARRAY..........
        function binarySearch()
        {
            $arr = util::ArrayInit(); 
            $search_elemant=readline("Enter element for searching:\n");
            $length=sizeof($arr);
            $low=0;
            $high=$length-1;
            while($low<=$high)
            {
                $mid=($low+$high)/2;
                if($search_elemant<$arr[$mid])
                {
                    $high=$mid-1;
                }
                else if($search_elemant>$arr[$mid])
                {
                    $low=$mid+1;
                }
                else
                {
                    echo"Element is Found\n";
                    return 1;
                }
            }
            echo"Element is Not Found\n";
            return 0;
        }

     
        // INSERTION SORT FOR INTEGER ARRAY AND CHARACTER ARRAY..........  
        
        static function insertionSort(&$arr, $n) 
        { 
            for ($i = 1; $i < $n; $i++) 
            { 
                $key = $arr[$i]; 
                $j = $i-1; 

                while ($j >= 0 && $arr[$j] > $key) 
                { 
                    $arr[$j + 1] = $arr[$j]; 
                    $j = $j - 1; 
                } 
                $arr[$j + 1] = $key; 
            } 
        } 
            
        function printArray($arr, $n) 
        { 
            for ($i = 0; $i < $n; $i++) 
                echo $arr[$i]." "; 
            echo "\n"; 
        } 

    
        //BUBBLE SORT FOR SORTING INT ARRAY.......


        function bubbleSort(&$arr) 
        { 
            $n = sizeof($arr); 
            for($i = 0; $i < $n; $i++)  
            { 
                for ($j = 0; $j < $n - $i - 1; $j++)  
                { 
                    if ($arr[$j] > $arr[$j+1]) 
                    { 
                        $t = $arr[$j]; 
                        $arr[$j] = $arr[$j+1]; 
                        $arr[$j+1] = $t; 
                    } 
                } 
            } 

        } 

        
    //MERGE SORT FOR SORTING ARRAY............
          
        static function mergesort($numlist)
        {
            if(count($numlist) == 1 ) return $numlist;
        
            $mid = count($numlist) / 2;
            $left = array_slice($numlist, 0, $mid);
            $right = array_slice($numlist, $mid);
        
            $left = util::mergesort($left);
            $right = util::mergesort($right);
            
            return util::merge($left, $right);
        } 

        function merge($left, $right)
        {
            $result=array();
            $leftIndex=0;
            $rightIndex=0;
         
            while($leftIndex<count($left) && $rightIndex<count($right))
            {
                if($left[$leftIndex]>$right[$rightIndex])
                {
         
                    $result[]=$right[$rightIndex];
                    $rightIndex++;
                }
                else
                {
                    $result[]=$left[$leftIndex];
                    $leftIndex++;
                }
            }
            while($leftIndex<count($left))
            {
                $result[]=$left[$leftIndex];
                $leftIndex++;
            }
            while($rightIndex<count($right))
            {
                $result[]=$right[$rightIndex];
                $rightIndex++;
            }
            return $result;
        }
      

        //Fewest Notes to be returned for Vending Machine.................

        static function vendingmachine()
        {
            $amount=readline("Enter Amount:");

            // to calcute no of 1000 notes 
            $thousand=$amount/1000;
            $amount=$amount%1000;

            // to calcute no of 500 notes
            $five_hund=$amount/500;
            $amount=$amount%500;

            // to calcute no of 100 notes
            $hundred=$amount/100;
            $amount=$amount%100;

            // to calcute no of 50 notes
            $fifty=$amount/50;
            $amount=$amount%50;

            // to calcute no of 20 notes
            $twenty=$amount/20;
            $amount=$amount%20;

            // to calcute no of 10 notes
            $tens=$amount/10;
            $amount=$amount%10;

            // to calcute no of 5 notes
            $five=$amount/5;
            $amount=$amount%5;

            // to calcute no of 2 notes
            $two=$amount/2;
            $amount=$amount%2;

            // to calcute no of 1 notes
            $one=$amount/1;
            $amount=$amount%1;

    // prints no of notes
            echo "Note of 1000 is : ".floor($thousand)."\n";
            echo "Note of 500 is : ".floor($five_hund)."\n";
            echo "Note of 100 is : ".floor($hundred)."\n";
            echo "Note of 50 is : ".floor($fifty)."\n";
            echo "Note of 20 is : ".floor($twenty)."\n";
            echo "Note of 10 is : ".floor($tens)."\n";
            echo "Note of 5 is : ".floor($five)."\n";
            echo "Note of 2 is : ".floor($two)."\n";
            echo "Note of 1 is : ".floor($one)."\n";
        }

    
       

}



?>