<?php
require_once ('StockData.php');
    class Utility
    {

        /**
         * to get input unless its an integere
         */
        public static function getInt()
        {
            fscanf(STDIN, "%s \n", $val);
            if ($val == 0) 
            {
                while (!is_numeric($val)) 
                {
                    echo "ivalid input try again\n";
                    fscanf(STDIN, " %s\ n ", $val);
                }
                return $val;
            } 
            else
             {
                while (!is_numeric($val) || $val / (int) $val > 1)
                {
                    echo "ivalid input try again\n";
                    fscanf(STDIN, " %s\n ", $val);
                }
                return (int) $val;
            }
        }


        /**
         * to get input its an string
        */
        public static function getString()
        {
            fscanf(STDIN, "%s", $val);
            while (is_numeric($val)) 
            {
                echo "invalid input try again \n";
                fscanf(STDIN, " %s ", $val);
            }
            return $val;
        }

        /**
         * to get input its an character string
        */
        public static function readChar()
        {
            $char =readline();
            if (ctype_alpha($char) === false) 
            {
               echo "must be in character form....!\n";
            }
            return $char;
        }

        /**
         * to get input its an character string
        */
        public static function readVariable()
        {
            $char =readline();
            return $char;
        }

        //function to get an integer input
        //returns an integer
        public static function integer_Input()
        {
            fscanf(STDIN, "%s\n", $num);
            //validating the integer input
            while((Utility::check_float($num)) || (!(is_numeric($num))) || ($num<0))
            {
                echo "enter a valid number ";
                //calling function again if in case not valid
                $num = Utility::integer_Input();
            }
            return $num;
        }


        //function to check whether the number is float
        //returns boolean value
        public static function check_float($num)
        {
            //should be numeric and should have decimal point
            if(is_numeric($num) && strpos($num,'.'))
            {
                return true;
            }
            else
            {
                return false;
            }
        }


         /**
         * function to validate integer input from the user and ask the user until proper input is fount and return it
         * @param int the value to verify as int
         * @param min the minimum value of the integer
         * @param max the maximum value of the integer
         * @return int the valid int in that range 
         * 
         */
        public static function validInt($int, $min, $max)
        {
            while (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false) 
            {
                echo ("Variable value is not within the legal range\n");
                echo "enter again : ";
                $int = Utility::integer_Input();
            }
            return $int;
        }

        function add($add)
        {
            echo "Adding New Elements Selected\n";
            echo "hii";
            $add = json_decode(file_get_contents("Account.json"));
        }

        
        public static function sell($account)
        {
            //show the stock from the list to the user
            Utility::printAccount($account);
            //taking the user input
            echo "Enter No of Stock To Sell : ";

            //validating the input
            $ch = Utility::validInt(Utility::integer_Input(), 1, count($account));
            echo $account[$ch]->name . " selected!\nEnter No Of Shares To Sell of " . $account[$ch]->name . " : ";
            $qt = Utility::validInt(Utility::integer_Input(), 1, $account[$ch]->quantity);

            //removing the stock
            $account[$ch]->quantity -= $qt;
            $list = Utility::printStockList(1);
            $list[$ch-1]->Quantity += $qt ;
            $account[0]->account += ($qt*$list[$ch-1]->price);
            Utility::saveList($list);
            Utility::saveAccount($account);
            echo "sold $qt shares successfully";

            //check if the shares are empty to delete the entry completely
            if ($account[$ch]->quantity == 0) 
            {
                array_splice($account, ($ch), 1);
            }
            return $account;
        }

        /**
        * function to print the list the stocks available to buy
        */
        public static function printStockList(int $s=0)
        {
            $list = json_decode(file_get_contents("StockList.json"));
            if($s===0)
            {
                echo "No | Stock Name | Share Price | Available\n";
                $i = 0;
               // $key=$list;
                foreach ($list as $key) 
                {
                    echo sprintf("%-1u. | %-10s | Rs %-12u | %-9u", ++$i, $key->name, $key->price , $key->Quantity) . "\n";
                }
            }
            return $list;
        }


        


        //function to print the stock currently in the customer account
        public static function printAccount($account)
        {
            echo "No | Stock Name | Share Price | No. Of Shares | Stock Price \n";
            $i = 0;
            //looping over and printing the account details
            for ($i=1; $i < count($account) ; $i++) 
            {
                $key = $account[$i];
                echo sprintf("%-2u | %-10s | Rs %-8u | %-13u | Rs %u", $i, $key->name, $key->price, $key->quantity, ($key->quantity * $key->price)) . "\n";
            }
        }

        /**
        * funtion to but stocks from the list and add it to the account
        */
        public static function buy($account)
        {
            //var_dump($account);
            //list var to store the list the stock to purachase from
            $list = Utility::printStockList();

            //asking use rfor input
            echo "Enter No with Stock To Buy : ";

            //var ch to store stock to buy
            $ch = Utility::validInt(Utility::integer_Input(), 1, 8);
            echo $list[$ch-1]->name . " selected!\n";
            echo "Enter No Of Shares To Buy of " . $list[$ch-1]->name . " : ";
            
            //amount to store the no of shares to buy
            $amnt = Utility::validInt(Utility::integer_Input(), 0, $list[$ch-1]->Quantity);
            if($account[0]->account<($list[$ch-1]->price*$amnt))
            {
                echo " Insufficient fund\n";
                return;
            }
            $list[$ch-1]->Quantity -= $amnt;
            Utility::saveList($list);
            //getting the stock from the list
            $stock = $list[$ch - 1];
            //creating new stock
            $stock = new StockData($stock->name, $stock->price, $amnt);
            //adding the stock to the account if already in the list and return
            $account[0]->account-= $amnt;
            for ($i = 1; $i < count($account); $i++) 
            {
                if ($account[$i]->name == $stock->name) 
                {
                    $account[$i]->quantity += $stock->quantity;
                    echo "Bought $stock->quantity " . "$stock->name shares successfully";
                    Utility::saveAccount($account);
                    return $account;
                }
            }
            //or else adds the new stack the end pf the list
            $account[] = $stock;
            echo "Bought $stock->quantity " . "$stock->name shares successfully";
            //waiting for user to see the result
            Utility::saveAccount($account);
            return $account;
        }
        
          /**
        * function to display the report of the stocks in account
        */
        public static function report($account)
        {
            $total = 0;
            echo "Stock Name | Per Share Price | No. Of Shares | Stock Price\n";
            //looping over and printing the account details and the account balance
            for ($i=1; $i < count($account) ; $i++) 
            {
                $key = $account[$i];
                echo sprintf("%-10s | rs %-12u | %-13u | rs %u", $key->name, $key->price, $key->quantity, ($key->quantity * $key->price)) . "\n";
                $total += ($key->quantity * $key->price);
            }
            echo "\n";
            echo "Total Value Of Stocks is : " . $total . " rs\namount left in account : ".$account[0]->account."\n\n";;
        }

        /**
        * this function save item into a list
        */
        public static function saveList(&$list)
        {
            file_put_contents("StockList.json", json_encode($list));
        }

      
        //function to save the stocks to the file
        public static function saveAccount($account)
        {
            file_put_contents("Account.json", json_encode($account));
        }

    }


        
    
?>