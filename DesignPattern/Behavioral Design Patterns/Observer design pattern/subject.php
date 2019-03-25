<?php
/**
    * Author : Pr@chi
    * Date : 24/03/2019
    * Description: Implementation of observer design pattern
 ****************************************************************************************************/

    /**
     * top level exception handler function to handle exception
     */
    set_exception_handler(function ($e) 
    {
        echo "\nException Occurred\n";
        echo $e->getMessage();
    });

    /**
     * abstract class with functions attach,detach,notify
     * and using dependecy injection of AbstractObserver
     */
    abstract class AbstractSubject
    {
        abstract public function attach(AbstractObserver $observer_in);
        abstract public function detach(AbstractObserver $observer_in);
        abstract public function notify();
    }
?>