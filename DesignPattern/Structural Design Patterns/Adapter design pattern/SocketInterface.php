<?php

/** 
 * Author : Pr@chi
 * Date : 23/03/2019
 * Description : Implementation ofadpter design pattern
***************************************************************************************************************/
    
    //require the following to work
    require_once ('Socket.php');
    
    /**
     * socket interface to provide rules for adapter
     */
    interface Adapter
    {
        //function that has to be overriden in the class which implements this interface
        public function get240Volts();
        public function get3Volts(); 
        public function get60Volts();
    }

    /**
     * socket adapter class which ast as a adapter between mobile,laptop or pc and socket
     */
    class SocketAdapter extends Socket implements Adapter
    {
        /**
         * method overridden to give 240 volts
         * @return volt240
         */
        public function get240Volts()
        {
            return $this->getVolts();
        }

        /**
         * function to get 3 volts output
         * @return volt3
         */
        public function get3Volts()
        {
            return $this->getVolts()/80;
        }
        
        /**
         * function to get 60 volts output
         * @return volt60
         */
        public function get60Volts()
        {
            return $this->getVolts()/4;
        }
    }
?>