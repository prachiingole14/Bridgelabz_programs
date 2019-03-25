<?php

    class Utility
    {
        static function getInt()
        {
            $intVariable=readline();

            if(!is_int($intVariable))
                {
                    return $intVariable;
                }
            else
                {
                    echo "Enter valid number......\n";
                }
        }

    }
?>