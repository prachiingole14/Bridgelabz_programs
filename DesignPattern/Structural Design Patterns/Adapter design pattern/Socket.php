<?php

    /** 
     * Author : Pr@chi
     * Date : 23/03/2019
     * Description : Implementation ofadpter design pattern
    ***************************************************************************************************************/
        
    /**
     * class socket to act as the class with 1 method
     */
    class Socket
    {
        /**
         * function to return the default voltage
         * @return volt120
         */
        function getVolts()
        {
            return 240;
        }
    }
?>
