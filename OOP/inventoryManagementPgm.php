<?php

    /*
     * @ author Pr@chi
     * @ since 13-03-2019
     * @ Description:Extend the above program to Create InventoryManager to manage the
                Inventory. The Inventory Manager will use InventoryFactory to create Inventory
                Object from JSON. The InventoryManager will call each Inventory Object in its list
                to calculate the Inventory Price and then call the Inventory Object to return the
                JSON String. The main program will be with InventoryManager
    */

    include 'Utility.php';

    class Stock
    {
        //var to store the data of stock
        public $name;

        //price of stack
        public $price;

        //quantity of share in the stock
        public $quantity;

        //constructor to initialize the variables in the class
        public function __construct($name, $price, $quantity)
        {
            $this->name = $name;
            $this->price = $price;
            $this->quantity = $quantity;
        }
    }
    /*
    * function to add data to the json file portfolio
    */
    function portfolio($portfolio)
    {
        echo "Enter no of stocks to add ";
        $stockValue = Utility::getInt();

        for ($i = 0; $i < $stockValue; $i++) 
        {
            echo "Enter Stock name :";
            $name = Utility::getString();
            echo "Enter number of Shares of $name :";
            $quantity = Utility::getInt();
            echo "Enter price of a share of $name:";
            $price = Utility::getInt();
            $portfolio[] = new Stock($name, $price, $quantity);
        }

        printReport($portfolio);
        $js = json_encode($portfolio);
        //print_r($js);
        file_put_contents("stock.json", $js);
        echo "\n----------------------------------------------------------------------------- \n\n";
    }

    /**
    * Function to print the report read from the json text file
    */
    function printReport($portfolio)
    {
        $total = 0;
        echo "Stock Name | Per Share Price | No. Of Shares | Stock Price\n";
        foreach ($portfolio as $key) 
        {
            //The sprintf() function writes a formatted string to a variable.
            echo sprintf("%-10s | rs %-12u | %-13u | rs %u", $key->name, $key->price, $key->quantity, ($key->quantity * $key->price)) . "\n";
            $total += ($key->quantity * $key->price);
        }
        echo "\nTotal Value Of Stocks is : Rs." . $total;
        echo "\n\n--------------------------------------------------------------------------- \n\n";
    }

    /**
    * function to create new portfolio
    */
    function newPort()
    {
        $portfolio = array();
        portfolio($portfolio);
    }

    //function to add stock to old port folio
    function add()
    {
        echo "Adding New Elements Selected\n";
        $portfolio = json_decode(file_get_contents("stock.json"));
        //print_r($portfolio);
        portfolio($portfolio);
    }

    /**
    *  function to run and test the above functions
    */
    function run()
    {
        //asks the user for input
        echo "\n------------------------- Choose your option --------------------------- \n\n";
        echo "Press 1 to Enter New Details in Stock Portfolio \n";
        echo "Press 2 to to clear and create new Portfolio \n";
        echo "Enter 3 to Display Old Shares With Report\n";
        echo "Else exit anything to exit\n";
        echo "Enter your choice : ";
        $choice = Utility::getInt()."\n";

        //switch case to run according to condition
        switch ($choice)
         {
            case 1:add();
                    echo "\n\n";
                    run();
                    break;

            case 2:newPort();
                    echo "\n\n";
                    run();
                    break;

            case  3:$portfolio = json_decode(file_get_contents("stock.json"));
                    printReport($portfolio);
                    Utility::getString();
                    break;

            default:echo "Exit ........!!\n";
                    break;
        }
    }

    //function to run the class
    run();

?>