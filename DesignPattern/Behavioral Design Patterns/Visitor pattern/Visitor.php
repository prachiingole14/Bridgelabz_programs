<?php

    /**
     * Author : Pr@chi
     * Date : 23 / 03 / 2019
     * Description : implementation of visitoor design pattern
     ***************************************************************************************************/
        
    /**
     * abstarct class visitor
     */
    abstract class Visitor 
    {
        /**
         * abstract methods of visitor class which has to be overriden by child class
         * @param bookVisitee_In for the book visitee
         * @return void
         */
        abstract function visitBook(BookVisitee $bookVisitee_In);

        /**
         * abstract methods of visitor class which has to be overriden by child class
         * @param softwareVisitee_In for the company visitee
         * @return void
         */
        abstract function visitSoftware(SoftwareVisitee $softwareVisitee_In);
    }

    /**
     * class PlainDescriptionVisitor extends the visitor
    */
    class PlainDescriptionVisitor extends Visitor 
    {  
        //private member variable
        private $description = NULL;
        
        /**
         * function to get the description
         * @return description 
         */
        function getDescription() 
        {
            return $this->description;
        }

        /**
         * function to set the description
         * @param descriptionIn description of visitee
         * @return void
         */
        function setDescription($descriptionIn) 
        { 
            $this->description = $descriptionIn;
        }

        /**
         * overriden method of visitor class
         * @param bookVisiteeIn 
         * @return void
         */
        function visitBook(BookVisitee $bookVisiteeIn) 
        {
            //setting a plain description for book
            $this->setDescription($bookVisiteeIn->getTitle().'. written by '.$bookVisiteeIn->getAuthor());
        }

        /**
         * overriden method of visitor class
         * @param softwareVisiteeIn
         * @return void
         */
        function visitSoftware(SoftwareVisitee $softwareVisiteeIn) 
        {
            //setting a plain description for company
            $this->setDescription($softwareVisiteeIn->getTitle().
            '. made by '.$softwareVisiteeIn->getSoftwareCompany().
            '. website at '.$softwareVisiteeIn->getSoftwareCompanyURL());
        }
    }

    /**
     * class FancyDescriptionVisitor extends the visitor
     */
    class FancyDescriptionVisitor extends Visitor 
    {
        //private member variable
        private $description = NULL;

        /**
         * function to get the description
         * @return description 
         */
        function getDescription() 
        { 
            return $this->description;
        }

        /**
         * function to set the description
         * @param descriptionIn description of visitee
         * @return void
         */
        function setDescription($descriptionIn) 
        { 
            $this->description = $descriptionIn;
        }

        /**
         * overriden method of visitor class
         * @param bookVisiteeIn 
         * @return void
         */
        function visitBook(BookVisitee $bookVisiteeIn) 
        {
            //setting a fancy description for book
            $this->setDescription($bookVisiteeIn->getTitle().
                '...!*@*! written !*! by !@! '.$bookVisiteeIn->getAuthor());
        }
        
        /**
         * overriden method of visitor class
         * @param softwareVisiteeIn
         * @return void
         */
        function visitSoftware(SoftwareVisitee $softwareVisiteeIn) 
        {
            //setting a fancy description for company
            $this->setDescription($softwareVisiteeIn->getTitle().
                '...!!! made !*! by !@@! '.$softwareVisiteeIn->getSoftwareCompany().
                '...www website !**! at http://'.$softwareVisiteeIn->getSoftwareCompanyURL());
        }
    }
?>