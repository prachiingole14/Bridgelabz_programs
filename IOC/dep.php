<?php
/**
 * dependancies for the php ios class
 */

    return
    [
       'car' => function()
       {
           return new car(new Engine(new part()));
       },
       
       'engine' => function()
       {
            return new Engine(new part());
       },

       'part' => function()
       {
           return new part();
       }
    ];
?>