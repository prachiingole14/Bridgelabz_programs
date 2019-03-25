   <?php

    /**
     * @ author Pr@chi
     * @ since 12-03-2019
     * @ Description: Program for JSON Inventory Data Management of Rice, Pulses and Wheat with properties name, weight, price per kg. 
    */

    include 'Utility.php';

    class Inventory
    {
        /*
          Constructor function to initialize the object properties
        */
        public function __construct($name, $weight, $price)
        {
            $this->name = $name;
            $this->weight = $weight;
            $this->price = $price;
        }

        //variable to store name weight and price per kg of the object in inventory
        public $name;
        public $weight;
        public $price;
    }

    /**
     * funtion to create the objects of the inventory and return it as an array of objects
     * @return arr array of the objects
    */
    function arrayObject()
    {
        // echo "Enter No Of Items In Inventory : ";
        $name = ["Rice", "Wheat", "Pulses"];
        $arr = [];
        for ($i = 0; $i < 3; $i++)
         {
            echo "enter weight of " . $name[$i] . "  ";
            $weight = Utility::getInt();

            echo "enter price of " . $name[$i] ;
            $price = Utility::getInt();
            
            echo "\n\n";
            $arr[$i] = new Inventory($name[$i], $weight, $price);
        }
        return $arr;
    }


    /**
     * Function to print the value from the program by calculating the price
     */
    function printValue($arr)
    {
        //var to store the total price.
        $price = 0;
        //loop to go through the array
        for ($i = 0; $i < count($arr); $i++) 
        {
            //calculating price of the sigle object
            $total = $arr[$i]['weight'] * $arr[$i]['price'];
            echo "Price for " . $arr[$i]['name'] . " is : " . $total . "rs\n";
            //adding to total prize
            $price += $total;
        }
        //printing total price
        echo "Total Price is : " . $price . "rs\n";
    }

    /**
     * Function to convert array to json string and ut it in to the file
     * @param arr the array which to put
     * @param file the loction of the file to put it
    */
    function jsonPut($arr, $file)
    {
        //converts to json string
        //Arrays are converted into JSON by using json_encode():
        $json = json_encode($arr);

        //writing it in to the files
        file_put_contents($file, $json);
    }

    /**
     * function to read the json string from the file and return it as an array
     * @param file the location of the file to read the json string
     * @return arr the array we get from the jason string
     */
    function getJson($file)
    {
        //saving the string from the files in the variable
        $contents = file_get_contents($file);
       
        //decoding the json string
        $arr = json_decode($contents, true);
        //returning the decoded array
        return $arr;
    }


    /**
     * function to run and test the above program
     */
    function run()
    {
        //file to save and get json from
        $file = "inventory.json";

        //getting array of oblect from the function
        $arr = arrayObject();

        //putting the array of object in the file as json
        jsonPut($arr, $file);

        //reading json from the file and decoding to array
        $jsonArr = getJson($file);
        //printing the inventory
        printValue($jsonArr);
    }

    //method to call and test the program above
    run();
    ?>