<?php
/*
            Author : Pr@chi
            Date : 22/03/2019
            Description : 
        
    *********************************************************************************************************************************/

    /**
     * top level exception handler function to handle exception
    */
    set_exception_handler(function ($e) 
    {
        echo "\nException Occurred\n";
        echo $e->getMessage();
    });

    class Server 
    {
        //holds the name of an item 
        public $name; 

        //holds the ip address of an item  
        public $IP;
         
        //holds the location of an item   
        public $loc;  

        /**
         * function for Server to perform their operation
         * @param name
         * @param ip
         * @param loc
         */
        public function server($name,$IP,$loc)
        {
            $this->name = $name;
            $this->IP = $IP;
            $this->loc = $loc;
        }

        /**
         * this function returns the name of an item
         * @return name
         */
        function name()
        {
            return $this->name;
        }

        /**
         * this function returns the ip address of an item
         * @return ip 
         */
        function IP()
        {
            return $this->IP;
        }

        /**
         * this function returns the location of an item
         * @return loc
         */
        function loc()
        {
            return $this->loc;
        }
        
    }
?>