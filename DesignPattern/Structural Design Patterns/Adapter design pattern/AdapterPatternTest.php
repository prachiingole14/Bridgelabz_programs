<?php
/** 
 * Author : Pr@chi
 * Date : 23/03/2019
 * Description : Implementation ofadpter design pattern
***************************************************************************************************************/
    
    /**
     * top level exception handler function to handle exception
     */
    set_exception_handler(function ($e)
    {
        echo "\nException Occurred\n";
        echo $e->getMessage();
    });

    //require the following to work
    require "Utility.php";
    require_once ('SocketInterface.php');

    /**
     * class mobile to create mobile object
     */
    class Mobile
    {
        //variable to store the charging voltage of the mobile
        private $cvolt;
        /**
         * constructor of the mobile to set voltage
         */

        function __construct(int $volt)
        {
            $this->cvolt = $volt;
        }

        /**
         * function to print charging of the mobile if correct voltage is provided
         */
        function charge(int $volt)
        {
            /**
             * charge the mobile if voltage is same as the required charging voltage
             * else does not charge
             */
            if($this->cvolt==$volt)
            {
                echo "Mobile Charging\n";
            }
            else 
            {
                echo "Mobile Not Charging\n";
            }
        }
    }

    /**
     * class laptop to create laptop object
     */
    class Laptop
    {
        //variable to store the charging voltage of the laptop
        private $cvolt;

        /**
         * constructor of the laptop to set voltage
         */
        function __construct(int $volt)
        {
            $this->cvolt = $volt;
        }

        /**
         * function to print charging of the laptop if correct voltage is provided
         */
        function charge(int $volt)
        {
            /**
             * charge the laptop if voltage is same as the required charging voltage
             * else does not charge
             */
            if($this->cvolt==$volt)
            {
                echo "Laptop Charging\n";
            }
            else 
            {
                echo "Laptop Not Charging\n";
            }
        }
    }

    /**
     * class pc to create mobile object
     */
    class Pc
    {
        //variable to store the charging voltage of the pc
        private $cvolt;

        /**
         * constructor of the pc to set voltage
         */
        function __construct(int $volt)
        {
            $this->cvolt = $volt;
        }

         /**
         * function to print charging of the pc if correct voltage is provided
         */
        function charge(int $volt)
        {
            /**
             * charge the pc if voltage is same as the required charging voltage
             * else does not charge
             */
            if($this->cvolt==$volt)
            {
                echo "Pc Charging\n";
            }
            else 
            {
                echo "Pc Not Charging\n";
            }
        }
    }

    /**
     *testing the adapter implementation
     */
    echo " ADAPTER PATTERN\n\n";

    //taking voltage for mobile from user
    echo "enter the votage to set for the mobile\n";
    $volt1 = Utility::getInt();

    //taking voltage for laptop from user
    echo "enter the votage to set for the laptop\n";
    $volt2 = Utility::getInt();

    //taking voltage for pc from user
    echo "enter the votage to set for the pc\n";
    $volt3 = Utility::getInt();

    //new mobile object
    $mob = new Mobile($volt1);

    //new laptop object
    $laptop = new Laptop($volt2);

    //new pc object
    $pc = new Pc($volt3);

    //new adapter
    $adapter = new SocketAdapter();

    //giving apropriate voltage
    $volt = $adapter->get3Volts();
    $mob->charge($volt);

    //giving apropriate voltage
    $volt = $adapter->get60Volts();
    $laptop->charge($volt);

    //giving apropriate voltage
    $volt = $adapter->get240Volts();
    $pc->charge($volt);
    
?>