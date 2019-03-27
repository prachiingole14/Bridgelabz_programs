<?php
    /**
     * Author : Pr@chi
     * Date : 24 / 03 / 2019
     * Description : implementation of visitor design pattern
     ***************************************************************************************************/
        
        //require the following to work
        require_once ('Visitor.php');
        require_once ('Visitee.php');

        //testing the visitor pattern
        echo "BEGIN TESTING VISITOR PATTERN\n";
        echo "\n";
        
        //creating instance of BookVisitee with parameters to initialize
        $book = new BookVisitee('Design Patterns', 'Gamma, Helm, Johnson, and Vlissides');

        //creating instance of SoftwareVisitee with parameters to initialize
        $software = new SoftwareVisitee('Zend Studio', 'Zend Technologies', 'www.zend.com');

        //instantiating PlainDescriptionVisitor class
        $plainVisitor = new PlainDescriptionVisitor();
        
        //calling function to accept book visitee and visitor
        acceptVisitor($book,$plainVisitor);

        //to print description
        echo "plain description of book: ".$plainVisitor->getDescription()."\n";

        //calling function to accept software visitee and visitor
        acceptVisitor($software,$plainVisitor);

        //to print description
        echo "plain description of software: ".$plainVisitor->getDescription()."\n";
        echo "\n";
        
        //instantiating PlainDescriptionVisitor class
        $fancyVisitor = new FancyDescriptionVisitor();
        
        //calling function to accept book visitee and visitor
        acceptVisitor($book,$fancyVisitor);

        //to print description
        echo "fancy description of book: ".$fancyVisitor->getDescription()."\n";

        //calling function to accept software visitee and visitor
        acceptVisitor($software,$fancyVisitor);

        //to print description
        echo "fancy description of software: ".$fancyVisitor->getDescription()."\n";
        echo "END TESTING VISITOR PATTERN\n";

        //double dispatch any visitor and visitee objects
        function acceptVisitor(Visitee $visitee_in, Visitor $visitor_in) 
        {
            //internally class patricular visitee accept function to accept the visitor
            $visitee_in->accept($visitor_in);
        }
        
        //testing reflection for constructor 
        echo "\nTesting reflection for constructor of BookVisitee\n";
        $class = new ReflectionClass('BookVisitee');
        echo $class->getConstructor();

        //testing reflection for method
        echo "\nTesting reflection for methods of BookVisitee\n";
        echo $class->getMethod('accept');
    
?>