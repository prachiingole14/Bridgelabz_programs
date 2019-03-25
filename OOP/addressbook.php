<?php

/*** 
 * @ author Pr@chi
 * @ since 15-03-2019
 * @ Description: Create Object Oriented Analysis and Design of a simple Address Book Problem
*/
    require 'Utility.php';

    function validInt($int, $min, $max)
    {
        //filter_var() function filters a variable with the specified filter.
        while (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false) 
        {
            echo ("Variable value is not within the legal range\n");
            echo "enter again : ";
            $int = Utility::getInt();
        }
        return $int;
    }

    class Person4
    {
        // fname to store first name of the person
        public $fname;

        //lname to store the last name of the person
        public $lname;

        // address to store the address of person as a string
        public $address;

        //city to store the name of the city of person
        public $city;

        // stte to store the state of the person
        public $state;

        // zip to store the zip code of the city
        public $zip;

        // phone to store the phone no of the person
        public $phone;
    }

    /**
     * function to create person objest by askin value from console
     * @param addressbook  the array of addressbook to store created person object
     */
    function createPerson(&$addressBook)
    {
        // person to store the person object
        $person = new Person();

        //asking user for input for person object
        echo "Enter Firstname \n";
        $person->fname = utility::getString();

        echo "Enter Lastname \n";
        $person->lname = utility::getString();

        echo "Enter State\n";
        $person->state = utility::getString();

        echo "Enter City\n";
        $person->city = utility::getString();

        echo "Enter Zip of $person->city\n";
        $person->zip = validInt(utility::getInt(), 100000, 10000000);

        echo "Enter Address\n";
        $person->address = utility::getString();

        echo "Enter Mobile Number \n";
        $person->phone = validInt(utility::getInt(), 1000000000, 10000000000);

        //adding it to the array address book
        $addressBook[] = $person;
    }

    /**
     * function to edit the details of a person
     * @param the person object to edit the details
     */
    function edit($person)
    {
        echo "Enter 1 to change Address\nEnter 2 change Mobile Number ";
        $choice = utility::getInt();
        switch ($choice)
        {
            case '1':echo "Enter State\n";
                    $person->state = utility::getString();

                    echo "Enter City\n";
                    $person->city = utility::getString();

                    echo "Enter Zip of $person->city\n";
                    $person->zip = validInt(utility::getInt(), 100000, 10000000);

                    echo "Enter Address\n";
                    $person->address = utility::getString();

                    echo "Address changes succesfully \n";
                    break;

            case '2':echo "Enter Mobile Number \n";
                    $person->phone = validInt(utility::getInt(), 1000000000, 10000000000);
                    echo "Moble no changed succesfully\n";
                    break;
                    
            default: break;
        }
    }

    /**
     * Function to delete the object of person from the array
     * & cts as refernce variable
     */
    function delete(&$arr)
    {
        $i = search($arr);
        if ($i > -1) 
            {
                array_splice($arr, $i, 1);
                echo "Entry Deleted\n";
            } 
        else 
            {
                echo "Entry Not Found\n";
            }
        
        fscanf(STDIN, "%s\n");
    }

    /**
     * function tosearch the array for specific person and return the index of person or -1 if not found
     * @param arr the array containig person from which to search
     * @return index of the searched item or -1 if not found
     */
    function search($arr)
    {
        echo "Enter firstaname to search\n";
        $fname = utility::getString();
        echo "Enter last name\n";
        $lname = utility::getString();
        for ($i = 0; $i < count($arr); $i++)
        {
            if ($arr[$i]->fname == $fname)
             {
                if ($arr[$i]->lname == $lname) 
                {
                    return $i;
                }
            }
        }
        return -1;
    }
    
    /**
     * function to print the addressbokk as a mailing format
     */
    function printBook($arr)
    {
        foreach ($arr as $person)
        {
            //sprintf() function writes a formatted string to a variable.
            echo sprintf("%s %s\n%s\n%s, %s\nZip - %u\nMobile- %u\n\n", $person->fname, $person->lname, $person->address, $person->city, $person->state, $person->zip, $person->phone);
        }
    }

    /**
     * function to sort the array by person object property
     *
     * @param arr the array containig person object to sort
     * @param  property the property for which to sort
     */
    function sortBook(&$arr, $property)
    {
        for ($i = 1; $i < count($arr); $i++) 
        {
            // getting value for back element
            $j = ($i - 1);
            //saving it in temperary variable;
            $temp = $arr[$i];
            while ($j >= 0 && $arr[$j]->{$property} >= $temp->{$property}) 
            {
                $arr[$j + 1] = $arr[$j];
                $j--;
            }

            $arr[$j + 1] = $temp;
        }
    }

    /**
     * function to save passed adrees bokk ib json file
     *
     * @param arr the array containing the person object ie addressbook to sav ein the file
     */
    function save($addressBook)
    {
        file_put_contents("addressBook.json", json_encode($addressBook));
    }

    /**
     * function act as a default menu for the program
     */
    function menu($addressBook)
    {
        echo "\n!!!!Address Book!!!!\n\n";
        echo "Enter 1 to add person\n";
        echo "Enter 2 to Edit a person\n";
        echo "Enter 3 to Delete a person\n";
        echo "Enter 4 to Sort and Display\n";
        echo "Enter 5 to search\nEnter anything to exit\n";
        
        $choice = utility::getInt();
        
        switch ($choice) 
        {
            case '1':$file=createPerson($addressBook);
                    //writing it in to the files
                    $json = json_encode($addressBook);
                    echo "-------------------------------------------------------------------------------------------------------\n\n";
                    menu($addressBook);
                    break;
                
            case '2':$k = 2;
                    while (($i = search($addressBook)) === -1) 
                    {
                        //var_dump prints the parameter's datatype,if it is int or flo
                        var_dump($i);
                        echo "No enteries Found.......\n";
                        echo "enter 1 to exit to MENU or Else to search again\n";
                        fscanf(STDIN, "%s\n", $k);
                        if ($k == 1)
                        {
                            break;
                        }
                    }
                    // var_dump($i);
                    if ($k == 1) 
                        {
                            menu($addressBook);
                        } 
                    else 
                        {
                            $addressbook[$i] = edit($addressBook[$i]);
                        }
                    echo "-------------------------------------------------------------------------------------------------------\n\n";
                    menu($addressBook);
                    break;
                
            case '3':delete($addressBook);
                    echo "-------------------------------------------------------------------------------------------------------\n\n";
                    menu($addressBook);
                    break;
                        
            case '4':echo "Enter 1 to sort by Name\n Enter 2 to sort by Zip\n Else to Menu";
                    $c = utility::getInt();
                    if ($c == 1) 
                    {
                        sortBook($addressBook, "fname");
                        printBook($addressBook);
                        echo "-------------------------------------------------------------------------------------------------------\n\n";
                    } 
                        else if ($c == 2) 
                        {
                            sortBook($addressBook, "zip");
                            printBook($addressBook);
                            echo "-------------------------------------------------------------------------------------------------------\n\n";
                        }
                            else 
                            {
                                menu($addressBook);
                            }

                    fscanf(STDIN, "%s\n");
                    echo "-------------------------------------------------------------------------------------------------------\n\n";
                    menu($addressBook);
                    break;
                
            case '5': $i = search($addressBook);
                    if ($i > -1) 
                    {
                        $arr = [];
                        $arr[] = $addressBook[$i];
                        printBook($arr);
                    }
                    echo "\n";
                    fscanf(STDIN, "%s\n");
                    echo "-------------------------------------------------------------------------------------------------------\n\n";
                    menu($addressBook);
                    break;
               
            // case '6':
            // save($addressBook);
            //     menu($addressBook);
            //     break;
            
            default:echo "Enter 1 to save ";
                    if (utility::getInt() == 1) 
                    {
                        save($addressBook);
                        //$arr = json_decode(file_get_contents("addressBook.json"));
                    }
                    break;
        }
    }
    
    //retriving contents from file and storing it in $arr
    $arr = json_decode(file_get_contents("addressBook.json"));

    menu($arr);
?>