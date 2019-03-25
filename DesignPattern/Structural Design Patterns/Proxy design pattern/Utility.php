<?php

    class Utility
    {
        static function getInt()
        {
            $password=readline();

            if(!is_int(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)))
                {
                    return $password;
                }
            else
                {
                    echo "Enter valid number......\n";
                }
        }

        static function password()
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