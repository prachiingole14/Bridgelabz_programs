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
     * abstract class with  function update
    */
    abstract class AbstractObserver
    {
        abstract public function update(AbstractSubject $subject_in);
    }
?>