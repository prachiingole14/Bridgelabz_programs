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

    require_once 'patternSubject.php';
    echo "BEGIN TESTING OBSERVER PATTERN\n";
    echo "\n";

    $patternGossiper = new PatternSubject();
    $patternGossipFan = new PatternObserver();
    $patternGossiper->attach($patternGossipFan);

    $patternGossiper->updateFavorites('Sehwag, Kohli, Sachin');
    $patternGossiper->updateFavorites('Sehwag, Kohli, Dhoni');
    
    $patternGossiper->detach($patternGossipFan);
    $patternGossiper->updateFavorites('Sehwag, Kohli, Pathan');

?>