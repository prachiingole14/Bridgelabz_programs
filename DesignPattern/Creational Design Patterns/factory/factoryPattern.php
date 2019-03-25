<?php
        /*
            Author : Pr@chi
            Date : 22/03/2019
            Description : Use Factory Pattern to create a Computer Factory that can Produce PC, Laptop and Server Class Computers.
        
    *********************************************************************************************************************************/

    require ("laptop.php");
    require ("server.php");
    require ("pc.php");
    require ("Utility.php");

        /**
         * top level exception handler function to handle exception
         */
        set_exception_handler(function ($e) 
        {
            echo "\nException Occurred\n";
            echo $e->getMessage();
        });

        /**
         * Factory class For creating an object and and calling the respective class according to requirements 
        */
        class ComputerFactory
        {
            /**
             * function which gives complete information
             */
            public static function getInfo($n)
            {
                for($i=0;$i<$n;$i++)
                {
                    switch($n)
                    {
                        
                        // case shows the laptop configration
                        case 1: echo "Your Laptop details are:\n";
                                return new Laptop("Dell","1TB","4GB");
                                break;

                        // case shows server details
                        case 2: echo "Your Server Details are:\n";
                                return new Server("ActFiber","172.23.200.10","Bridgelabz");
                                break;

                        // case shows the laptop details
                        case 3: echo "Your PC Details:\n";
                                return new Pc("Dell","500GB","1GB","windows 10");
                                break;

                        // when entering invalid option it will be executed
                        default : echo "Invalid Input.......!\n\n";
                                  //echo "Choose option between 1-3\n"; 
                                  //ComputerFactory::getInfo($n);
                                  break;
                    } 
                }
                echo "Exit  ..!!!\n";
            }
        }

    /**
     * calling main function
     */
    function main()
    {
        // Creating object of the class ComputerFactory
        $f = new ComputerFactory();

        //Enter your choice which operation you want to choose
        echo "\nEnter your choice.....\n1.Laptop\n2.Server\n3.PC \n";
        echo "Your choice : ";
        $obj = $f->getInfo(Utility::getInt());

        //getProprties is function of Reflection class
        $ref = new ReflectionClass($obj);
        //$dfdf = $ref->getProperties() ;
        foreach($ref->getProperties() as $key)
        {
            echo $key->getName()." -> ".$key->getValue($obj)."\n";
        } 
    }

    main();
?>
