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

require_once 'observer.php';

/**
 * class using inheritance to get the properties of super class
 */
    class PatternObserver extends AbstractObserver
    {
        // intilisation of constructor
        public function __construct()
        {}

        /**
         * function to update the data 
         * generlisation (dependecy injection)
        */
        public function update(AbstractSubject $subject)
        {
            echo "*IN PATTERN OBSERVER - NEW UPDATE ALERT*\n";
            echo " new favorite patterns: " . $subject->getFavorites() . "\n";
            echo "*IN PATTERN OBSERVER - PATTERN UPDATE ALERT OVER*\n\n";
        }
    }
?>