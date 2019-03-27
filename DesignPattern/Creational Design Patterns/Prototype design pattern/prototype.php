<?php
    /**
     * Author : Pr@chi
     * Date : 22/03/2019
     * Designation : implementation of prototype design pattern
     */

    /**
    * top level exception handler function to handle exception
    */
    set_exception_handler(function ($e) 
    {
        echo "\nException Occurred\n";
        echo $e->getMessage();
    });
 
    /**
    * Implementation of Prototype on Book Information
    */
    abstract class BookPrototype 
    {
        protected $title;
        protected $topic;
        abstract function __clone();
        function getTitle() 
        {
            return $this->title;
        }
        function setTitle($titleIn) 
        {
            $this->title = $titleIn;
        }
        function getTopic() 
        {
            return $this->topic;
        }
    }    

    /**
    * Implementation of PHPBookPrototype extends BookPrototype
    */
    class PHPBookPrototype extends BookPrototype 
    {
        function __construct() 
        {
            $this->topic = 'PHP';
        }
        function __clone() 
        {}
    }

    /**
    * Implementation of DesignpatternsBookPrototype extends BookPrototype
    */
    class DesignpatternsBookPrototype extends BookPrototype 
    {
        function __construct() 
        {
            $this->topic = 'Designpatterns';
        }
        function __clone() 
        {}
    }
    
    echo "\nBEGIN TESTING PROTOTYPE PATTERN\n\n";

    //creating new object of PHPBookPrototype
    $phpProto = new PHPBookPrototype(); 

    //creating new object of DesignpatternsBookPrototype  
    $designProto = new DesignpatternsBookPrototype(); 

    // cloning var $designProto   
    $bookOne = clone $designProto; 

    // passing the book titles for book 1              
    $bookOne->setTitle('Book Details');    

    //printing Book 1 topic   
    echo "BookOne topic: ".$bookOne->getTopic()."\n"; 

    //printing Book 1 title
    echo "BookOne title: ".$bookOne->getTitle()."\n"; 

    // cloning var $phpProto
    $bookTwo = clone $phpProto;     

    // passing the book titles for book 2          
    $bookTwo->setTitle('Harry PHP7'); 

    //printing Book 2 topic       
    echo "\nBookTwo topic: ".$bookTwo->getTopic()."\n"; 

    //printing Book 2 title 
    echo "BookTwo title: ".$bookTwo->getTitle()."\n";  

    // cloning var $designProto  
    $bookThree = clone $designProto;         

    // passing the book titles for book 3       
    $bookThree->setTitle('PHP Master');     

    //printing Book 3 topic   
    echo "\nBookThree topic: ".$bookThree->getTopic()."\n"; 

    //printing Book 3 title
    echo "BookThree title: ".$bookThree->getTitle()."\n";   
   
?>
        
