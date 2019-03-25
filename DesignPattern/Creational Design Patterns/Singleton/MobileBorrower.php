<?php
/********************************************************************************************
    * Author : Pr@chi
    * Date : 22/03/2019
    * Description : Use Singleton Pattern to create a Book and Author deatils borrow or return by Book Borrower.
 **********************************************************************************************/
  
    /**
     * require following to work
    */
    require_once ('MobileSingleton.php');

    /**
     * Mobile Borrower Class 
    */
    class MobileBorrower 
    {
        //private memeber variable of MobileBorrower class
        private $borrowedMobile;
        private $haveMobile = FALSE;

        /**
         * private constructor to restrict instantiation of the class from other classes
         */
        function __construct() 
        {}

        /**
         * function to get both model and company Details
         * @return modelbycompany model and company name of mobile
         */
        function getCompanyAndModel() 
        {
            //if borrower have mobile the return the details
            if (TRUE == $this->haveMobile) 
            {
                return $this->borrowedMobile->getCompanyAndModel();
            } 
            else 
            {
                //else return the message
                return "I don't have the Mobile";
            }
        }

        /**
         * Function to borrow the mobile 
         * uses eager initialization
         */
        function borrowMobile() 
        {
            //getting the instance of MobileSingleton class
            $this->borrowedMobile = MobileSingleton::borrowMobile();

            if ($this->borrowedMobile == NULL) 
            {
                //set to false if not object returned
                $this->haveMobile = FALSE;
            } 
            else 
            {
                //set to true if object returned
                $this->haveMobile = TRUE;
            }
        }

        /**
         * this function returns mobile ie borrower returns back the mobile
         */
        function returnMobile() 
        {
            $this->borrowedMobile->returnMobile();
        }
    }
?>