<?php

     /**
     * @ author Pr@chi
     * @ since 16-03-2019
     * @ Description: Program for JSON Inventory Data Management of Rice, Pulses and Wheat with properties name, weight, price per kg. 
    */

    require 'Utility.php';
    require_once 'StockData.php';

   

    function menu($account)
    {
        $ch = 0;
        while($ch!=2)
        {
            //menu shown to the user
            echo "\n************* Commercial Data Processing *************\n\n";
            echo "Enter 1 to create a new stock account from the file\n";
            echo "Enter 2 to Sell Stocks\n";
            echo "Enter 3 to buy New Stock from the StockList\n";
            echo "Enter 4 to Print Stock Report\n";
            echo "Enter 5 to save the account and exit\n";
            $choice = Utility::integer_Input();

            //switch case to run according to condition
            switch ($choice) 
            {
                
                case 1 :    $newAccount = $account;
                            AddAccount($account);
                            echo "Print available New stock account is \n";
                            //to print the new account
                            Utility::printAccount($newAccount);
                            echo "\n";
                            break;

                case 2 :    //calling function to sell share from account
                            $account = Utility::sell($account);
                            echo "\n\n";
                            break;

                case 3 :    //calling function to buy a share and adding to account
                            $account = Utility::buy($account);
                            echo "\n\n";
                            break;
                            
                case 4 :    //printing the report
                            echo "Printing the stock account details of customer\n\n";
                            Utility::report($account);
                            break;
                            
                case 5 :    echo "Account Saved to file\n";
                            break;
                            
                default :    echo "enter a valid option\n";
                            break;
                            
            }
        }
    }  
       
    function jsonPut($arr, $account)
    {
        //converts to json string
        //Arrays are converted into JSON by using json_encode():
        $json = json_encode($arr);

        //writing it in to the files
        file_put_contents($account,$json, true);
    }
       
    function AddAccount($account)
    {
       
        $arr = [];

            echo "enter name of stock ";
            $name = Utility::readVariable()."\n";

            echo "enter no of stock ";
            $quatity = Utility::getInt()."\n";

            echo "enter price of stock ";
            $price = Utility::getInt()."\n";
            
            echo "\n\n";
            $arr[] = new StockData($name, $quatity, $price);  
            jsonPut($arr, $account) ;     
        return $arr;
    }
       

    //checking the user account
    $account = json_decode(file_get_contents("Account.json"));

    //calling the user input
    menu($account);
     
    ?>