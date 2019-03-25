
<?php

    /**
        * Author : Pr@chi
        * Date : 22/03/2019
        * Description : Use Singleton Pattern to create a Book and Author deatils borrow or return by Book Borrower.
    *********************************************************************************************************************/
   
    /**
     * SINGLETON CLASS
     * class MobileSingleton which implements Singleton pattern
     */
    class MobileSingleton 
    {
        /**
         * memeber functions of MobileSingleton class
         */
        private $company = 'Google';
        private $model  = 'Google pixel 3';

        /**
         * private static variable ie the only instance of the class
         */
        private static $mobile = NULL;
        private static $isLoanedOut = FALSE;

        /**
         * private constructor to restrict instantiation of the class from other classes
        */
        private function __construct() 
        {}

        /**
         * Static Function of Lazy Initialization that returns the instance of the class
         * @return mobile instance of the MobileSingleton class
        */
        public static function borrowMobile() 
        {
            if (FALSE == self::$isLoanedOut) 
            {
                //doing null check
                if (NULL == self::$mobile) 
                {
                    //if not null instantiating the class
                    self::$mobile = new MobileSingleton();
                }

                self::$isLoanedOut = TRUE;
                //returning the object
                return self::$mobile;
            } 
            else 
            {
                //else returning null
                return NULL;
            }
        }

        /**
         * Function to return Mobile Details
        */
        function returnMobile() 
        {
            //if mobile is returned the variable is set to false
            self::$isLoanedOut = FALSE;
        }

        /**
         * To get Company Details
         * @return company company details
        */
        function getCompany() 
        {
            return $this->company;
        }

        /**
         * To get model Details
         * @return model mobile details 
        */
        function getModel() 
        {
            return $this->model;
        }

        /**
         * To get both company and model Details
         * @return modelbycompany model and company name of mobile
        */
        function getCompanyAndModel() 
        {
            return $this->getModel() . ' by ' . $this->getCompany();
        }
    }
?>
