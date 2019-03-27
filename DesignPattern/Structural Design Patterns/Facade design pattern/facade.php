<?php
/**
    * Author : Pr@chi
    * Date : 23/03/2019
    * Descreption :Facade design pattern is used to help client applications to easily interact with the system. 
    *In the Address Book Problem use Facade Pattern to read the Address Book from the File or from the Database
 ****************************************************************************************************/

 /**
 * top level exception handler function to handle exception
 */
set_exception_handler(function ($e) 
{
    echo "\nException Occurred\n";
    echo $e->getMessage();
});

//requires below file to work on
require 'Utility.php';

//creating a Hotel interface with getMenus function so that unrelated class can implement same methods
interface Hotel
{
    //abstract function of interface class
    public function getMenus();
}

//creating class NonVegMenu so that it can be used by NonVegRestaurant class
class NonVegMenu
{}

//creating class VegMenu so that it can be used by VegRestaurant class
class VegMenu
{}

//creating class Both so that it can be used by VegNNonVegBothRestaurant class
class Both
{}

//creating NonVegRestaurant class that implements HOtel interface and it should implement getmenus function
class NonVegRestaurant implements Hotel
{
    /**
     *Creating function getMenus to get the menu of that particular restaurant
     *@return nonVegMenu 
    */
    public function getMenus()
    {
        //creating NonVegMenu object
        $nonVegMenu = new NonVegMenu();

        //returning nonVegMenu object
        return $nonVegMenu;
    }
}

//creating VegRestaurant class that implements HOtel interface and it should implement getmenus function
class VegRestaurant implements Hotel
{
    /**
     *Creating function getMenus to get the menu of that particular restaurant
     *@return vegMenu 
     */
    public function getMenus()
    {
        //creating VegMenu object
        $vegMenu = new VegMenu();
        //returning VegMenu object
        return $vegMenu;
    }
}

//creating VegNNonVegBothRestaurant class that implements HOtel interface and it should implement getmenus function
class VegNNonVegBothRestaurant implements Hotel
{
    /**
     *Creating function getMenus to get the menu of that particular restaurant
     *@param nothing
     *@return both is returned (i.e, it has both veg and non veg menu)
     */
    public function getMenus()
    {
        //creating Both object
        $both = new Both();
        //returning Both object
        return $both;
    }
}

//creating hotelkeeper class which is facade class
class HotelKeeper
{
    /**
     *Creating function getVegMenu to get the menu of that particular restaurant
     */
    public function getVegMenu()
    {
        //creating new VegRestaurant object
        $vegRestaurant = new VegRestaurant();

        // calling getMenus function of VegRestaurant class on vegRestaurant object
        $vegMenu = $vegRestaurant->getMenus();
        echo "Here Sir, veg menu of paradise Restaurant \n ";
        echo " * Paneer Tikka\n  * Malai Kofta\n  * Dal-Bati\n";
    }

    /**
     *Creating function getNonVegMenu to get the menu of that particular restaurant
     */
    public function getNonVegMenu()
    {
        //creating new NonVegRestaurant object
        $nonVegRestaurant = new NonVegRestaurant();

        // calling getMenus function of NonVegRestaurant class on NonVegRestaurant object
        $nonvegMenu = $nonVegRestaurant->getMenus();
        echo "Here Sir, Non-veg menu of paradise Restaurant\n ";
        echo " * Chicken Biryani\n  * Chicken Carry\n  * Fish\n";
    }

    /**
     *Creating function getVegNonMenu to get the menu of that particular restaurant
     *@param nothing
     *@return nothing
     */
    public function getVegNonMenu()
    {
        //creating new VegNNonVegBothRestaurant object
        $vegNonBothRestaurant = new VegNNonVegBothRestaurant();

        // calling getMenus function of VegNNonVegBothRestaurant class on vegNonBothRestaurant object
        $bothMenu = $vegNonBothRestaurant->getMenus();
        echo "Here Sir, Both veg and non veg menu of paradise Veg/Non Veg Restaurant\n ";
    }
}

//creating clent class for testing Facade Design pattern
class Client
{
    /**
     *Creating function customerFacing to know how the facade design pattern works
     */
    public function customerFacing()
    {
        //try catch
        try 
        {
            echo ("\n      ----------FACADE DESIGN PATTERN------------\n");
            echo ("\n");
            //asking the user for input
            echo "\nPress 1 for Veg menu \nPress 2 for Non Veg menu \nPress 3 for Both veg and non veg menu \nPress 4 to exit \n";
            $choice = utility::getInt();
            //creating new HotelKeeper class
            $hotelKeeper = new HotelKeeper();
            //switch statement is used to perform different actions based on different conditions
            switch ($choice) 
            {
                case 1: /*if customer chooses vegmenu
                        *calling getVegMenu function on hotelKeeper object to show the menu
                        */
                        $vegMenu = $hotelKeeper->getVegMenu();
                        echo "\n";
                        //calling customerFacing function to show the menu to user again
                        $this->customerFacing();
                        break;
                    
                case 2: /*if customer chooses nonveg menu
                        *calling getNonVegMenu function on hotelKeeper object to show the menu
                        */
                        $nonVegMenu = $hotelKeeper->getNonVegMenu();
                        echo "\n";
                        echo "\n";
                        //calling customerFacing function to show the menu to user again
                        $this->customerFacing();
                        break;
                    
                case 3: /*if customer chooses Veg and Nonveg Menu
                        *calling getVegNonMenu function on hotelKeeper object to show the menu
                        */
                        $both = $hotelKeeper->getVegNonMenu();
                        echo "\n";
                        echo "\n";
                        //calling customerFacing function to show the menu to user again
                        $this->customerFacing();
                        break;
                    
                default: //if customer chooses to exit
                        echo "Thank You for visiting Come again ......!\n";
                        echo "\n";
                        break;
                    
            }
        } 

        catch (Exception $e) 
        {
            echo "\n", $e->getMessage();
        }
    
        /*finally 
        {
            echo ("------------END TESTING FACADE PATTERN----------------\n");
            echo ("\n");
        }*/
    }   
}

    //creating new client object
    $client = new Client();

    //calling customerFacing function on client object
    $client->customerFacing();
?>