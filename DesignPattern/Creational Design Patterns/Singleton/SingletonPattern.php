
<?php
    /********************************************************************************************
        * Author : Pr@chi
        * Date : 22/03/2019
        * Description : Use Singleton Pattern to create a Book and Author deatils borrow or return by Book Borrower.
    **********************************************************************************************/
    
    /** 
     *require following to work
    */
    require_once ('MobileBorrower.php');

    /**
     *testing the singleton implementation
    */
    echo "       --------- SINGLETON PATTERN ---------\n\n";
    
    /**
     *instatiating MobileBorrower class
     * @param mobileBorrower1 store object of MobileBorrower class
     * @param mobileBorrower2 store object of MobileBorrower class
    */
    $mobileBorrower1 = new MobileBorrower();
    $mobileBorrower2 = new MobileBorrower();

    //First borrower borrowing the mobile 
    $mobileBorrower1->borrowMobile();
    echo "First borrower making request to borrow the mobile\n";
    echo "First borrower's mobile with Company and Model: \n";

    //getting the model and company details
    echo $mobileBorrower1->getCompanyAndModel()."\n\n";

    //Second borrower borrowing the mobile 
    $mobileBorrower2->borrowMobile();
    echo "Second borrower making request to borrow the mobile\n";
    echo "Second borrower's mobile with Company and Model: \n";

    //getting the model and company details
    echo $mobileBorrower2->getCompanyAndModel()."\n\n";

    //First borrower returning the mobile 
    $mobileBorrower1->returnMobile();
    echo "First borrower returned the mobile\n\n";

    //Second borrower again borrowing the mobile 
    $mobileBorrower2->borrowMobile();
    echo "Second borrower again making a request to borrow the mobile afer first borrower returned it\n";
    echo "Second borrower's Company and Model: \n";

    //getting the model and company details
    echo $mobileBorrower1->getCompanyAndModel()."\n\n";

    //gets class as a reflection class
    $reflector = new ReflectionClass('MobileSingleton');
    
    //getting the properties of the class as an array
    $properties = $reflector->getProperties();
    echo "printing properties of class\n";
    print_r($properties);
    
    //getting the default properties of the class
    $defaults = $reflector->getDefaultProperties();
    echo "printing properties of class\n";
    print_r($defaults);
    
?>