
<?php
    /**
     * Author : Pr@chi
     * Date : 23 / 03 / 2019
     * Description : implementation of visitoor design pattern
     ***************************************************************************************************/
        
    /**
     * abstarct class Visitee 
     */
    abstract class Visitee 
    {
        /**
         * abstract function accept which should be overriden by child class
         * @param visitorIn it accepts the visitor objject
         */
        abstract function accept(Visitor $visitorIn);
    }

    /**
     * class BookVisitee extends the Visitee class
     */
    class BookVisitee extends Visitee 
    {
        //private member variable
        private $author;
        private $title;

        /**
         * parameterised constructor to initialise the member variable
         * @param title_in title of book
         * @param author_in author of book
         * @return void
         */
        function __construct($title_in, $author_in) 
        {
            $this->author = $author_in;
            $this->title  = $title_in;
        }

        /**
         * function to get the author
         * @return author
         */
        function getAuthor() 
        {
            return $this->author;
        }
        
        /**
         * function to get the title
         * @return title
         */
        function getTitle() 
        {
            return $this->title;
        }
        
        /**
         * overridden method of Visitee
         * @param visitorIn vistor to be accepted
         * @return void
         */
        function accept(Visitor $visitorIn) 
        {
            //passing itself as reference to visitBook method
            $visitorIn->visitBook($this);
        }
    }

    class SoftwareVisitee extends Visitee 
    {
        //private member variable
        private $title;
        private $softwareCompany;
        private $softwareCompanyURL;
        /**
         * parameterised constructor to initialise the member variable
         * @param title_in title of company
         * @param softwareCompany_in company
         * @param softwareCompanyURL_in company url
         * @return void
         */
        function __construct($title_in, $softwareCompany_in, $softwareCompanyURL_in) 
        {
            $this->title  = $title_in;
            $this->softwareCompany = $softwareCompany_in;
            $this->softwareCompanyURL = $softwareCompanyURL_in;
        }

        /**
         * function to get the SoftwareCompany
         * @return SoftwareCompany
         */
        function getSoftwareCompany() 
        {
            return $this->softwareCompany;
        }

        /**
         * function to get the SoftwareCompanyURL
         * @return SoftwareCompanyURL
         */
        function getSoftwareCompanyURL() 
        {
            return $this->softwareCompanyURL;
        }

        /**
         * function to get the Title
         * @return Title
         */
        function getTitle() 
        {
            return $this->title;
        }
        
        /**
         * overridden method of Visitee
         * @param visitorIn vistor to be accepted
         * @return void
         */
        function accept(Visitor $visitorIn) 
        {
            //passing itself as reference to visitBook method
            $visitorIn->visitSoftware($this);
        }
    }
?>