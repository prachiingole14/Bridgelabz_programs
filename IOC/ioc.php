<?php

    /**
     *  Author : Pr@chi
     *  Date : 27/03/2019
     *  Description : implementation of Inversion of Control(IoC).
    */

    /**
     * Exception handling
    */
    set_exception_handler(function($e)
    {
        echo "Exception occure.....!\n\n";
        echo $e->getMassage();
    });

    /**
     * class part is act as part of class 
     */
    class Part
    {
        //Empty class
    }

    /**
     * class Engine act as engine of car
     * @param part is protected
     */
    class Engine
    {
        protected $part;
        public function __construct(Part $part)
        {
            $this->part=$part;
        }
    }

    /**
     *  class car 
     * @param engine is protected
    */
    class Car
    {
        protected $engine;
        public function __construct(Engine $engine)
        {
            $this->engine=$engine;
        }

        /**
         * function to run car
        */
        public function run()
        {
            echo "Car is running.....\n\n";
        }
    }

    /**
     * class Container 
     * having static function init
     * @param dep store file dep.php
    */
    class Container
    {
        public static $deps=[];

        public static function init()
        {
            $dep = include "dep.php";
            foreach ($dep as $key => $closure) 
            {
                static::$deps[strtolower($key)] = $closure;
            }
        }

        /**
         *function to getInstance
        *using dependency
        */
        public static function getInstance(string $classname)
        {
            if (array_key_exists(strtolower($classname), static::$deps)) 
            {
                return call_user_func(static::$deps[strtolower($classname)]);
            } 
            else 
            {
                throw new Exception("Class Not Found\n add dependency first \n");
            }
        }

        /**
         * function to addDependency
        */
        public static function addDependency(string $classname, closure $closure)
        {
            self::$deps[strtolower($classname)] = $closure;
        }
    }

    Container::init();
    $deb = include "dep.php";
    $car = Container::getInstance("car");

    /**
     * calling the run function
     */
    $car->run();
    //print_r($car);

    
?>