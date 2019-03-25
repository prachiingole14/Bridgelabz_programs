<?php

/*** 
 * @ author Pr@chi
 * @ since 16-03-2019
 * @ Description: This programme is used to manage a list of Doctors associated with the Clinique. 
            This also manages the list of patients who use theclinique. It manages Doctors by Name, 
            Id, Specialization and Availability (AM, PM or both). It manages Patients by Name, ID, Mobile 
            Number and Age. The Program allows users to search Doctor by name, id, Specialization or 
            Availability. Also the programs allows users to search patient by name, mobile number or id.
            The programs allows patients to take appointment with the doctor. A doctor at any availability 
            time can see only 5 patients. If exceeded the user can take appointment for patient at 
            different date or availability time. Print the Doctor Patient Report. Also show which 
            Specialization is popular in the Clinique as well as which Doctor is popular.
*/

    include 'Utility.php';
    include 'linkedList.php';


    class doctor
    {
        //variable to store name weight and price per kg of the object in inventory
        public $id;
        public $name;
        public $Specilization;
        public $Available; 

           
       /* //constructor to initialize the variables in the class
        function __construct($id, $name, $specialization, $availability)
        {
            $this->id=$id;
            $this->name = $name;
            $this->specialization = $specialization;
            $this->availabilitity = $availability;
        }*/
        
    }
   

    class patients
    {
        //variable to store name weight and price per kg of the object in inventory
        public $pid;
        public $pname;
        public $mobile_no;
        public $age; 
    }
    $pt = new patients;
    
    /*function add_Dr_Details($arr)
    {
        echo "Enter the id of Dr:\n";
        $id=Utility::getInt();
        echo $id;

        echo "Enter the name of Dr:\n";
        $name=Utility::readChar();
        echo $name;

        echo "Enter the specialization of Dr:\n";
        $specialization=Utility::readChar();
        echo $specialization;

        echo "Enter the availability of Dr:\n";
        $availability=Utility::readChar();
        echo $availability;

        $dr = new doctor;
        $dr->id = $id;
        $dr->name = $name;
        $dr->specialization = $specialization;
        $dr->avalability = $availability;

        /**
         * storing the object of class in to an array
         
        $arr = $dr;
       // echo $arr;

        /**
         * returning the stored value.
         
        return $arr;
    }

    echo "Add doctors details..........!\n";
    $add_Dr=add_Dr_Details($arr);
    file_get_contents($add_Dr,doctor);*/

    function searchId($readDr)
    {
        echo "Enter id to search\n";
        $id = utility::readVariable();
        for ($i = 0; $i < count($readDr); $i++)
        {
            if ($readDr[$i]->id == $id)
            {
                echo "\n .....Available Doctor....\n\n";
                echo "Dr. Id : ".$readDr[$i]->id."\n";
                echo "Dr. Name :  ".$readDr[$i]->name."\n";
                echo "Dr. Specilization".$readDr[$i]->Specilization."\n";
                echo "Dr. Available :  ".$readDr[$i]->Available."\n";
                echo "-------------------------------------------------------------------------\n";
                return -1;
            }
            else
            {
                echo "Enter valid option......\n";
            }
        }
    }    

    function searchName($readDr)
    {
        echo "Enter Name to search\n";
        $name = utility::readVariable();
        for ($i = 0; $i < count($readDr); $i++)
        {
            if ($readDr[$i]->name == $name)
            {
                echo "\n .....Available Doctor....\n\n";
                echo "Dr. Id : ".$readDr[$i]->id."\n";
                echo "Dr. Name :  ".$readDr[$i]->name."\n";
                echo "Dr. Specilization".$readDr[$i]->Specilization."\n";
                echo "Dr. Available :  ".$readDr[$i]->Available."\n";
                echo "-------------------------------------------------------------------------\n";
                return -1;
            }
            else
            {
                echo "Enter valid option......\n";
            }
        }
    } 

 
    function searchSpecilist($readDr)
    { 
        echo "Enter specilization of dr to search\n";
        $Specilization = utility::readVariable();
        for ($i = 0; $i < count($readDr); $i++)
        {
            if ($readDr[$i]->Specilization == $Specilization)
            {
                echo "\n .....Available Doctor....\n\n";
                echo "Dr. Id : ".$readDr[$i]->id."\n";
                echo "Dr. Name :  ".$readDr[$i]->name."\n";
                echo "Dr. Specilization".$readDr[$i]->Specilization."\n";
                echo "Dr. Available :  ".$readDr[$i]->Available."\n";
                echo "-------------------------------------------------------------------------\n";
                return -1;
            }
        }
    } 

    function searchAvailabilitity($readDr)
    {
        echo "Enter availability to search\n";
        $Available = utility::readVariable();
        for ($i = 0; $i < count($readDr); $i++)
        { 
            if ($readDr[$i]->Available == $Available)
            {
                echo "\n .....Available Doctor....\n\n";
                echo "Dr. Id : ".$readDr[$i]->id."\n";
                echo "Dr. Name :  ".$readDr[$i]->name."\n";
                echo "Dr. Specilization".$readDr[$i]->Specilization."\n";
                echo "Dr. Available :  ".$readDr[$i]->Available."\n";
                echo "-------------------------------------------------------------------------\n";
                return -1;
            }
            else
            {
                echo "Enter valid option......\n";
            }
        }
    } 


    function searchIdPt($readPt)
    {
        echo "Enter id to search\n";
        $pid = utility::readVariable();
        for ($i = 0; $i < count($readPt); $i++)
        {
            if ($readPt[$i]->pid == $pid)
            {
                echo "\n .....Available Patients....\n\n";
                echo "Pt. Id : ".$readPt[$i]->pid."\n";
                echo "Pt. Name :  ".$readPt[$i]->pname."\n";
                echo "Pt. Mobile No :  ".$readPt[$i]->mobile_no."\n";
                echo "Pt. Age :  ".$readPt[$i]->age."\n";
                echo "-------------------------------------------------------------------------\n";
                return -1;
            }
            else
            {
                echo "Enter valid option......\n";
            }
        }
    } 

    
    function searchnamePt($readPt)
    {
        echo "Enter name to search\n";
        $pname = utility::readVariable();
        for ($i = 0; $i < count($readPt); $i++)
        {
            if ($readPt[$i]->pname == $pname)
            {
                echo "\n .....Available Patients....\n\n";
                echo "Pt. Id : ".$readPt[$i]->pid."\n";
                echo "Pt. Name :  ".$readPt[$i]->pname."\n";
                echo "Pt. Mobile No :  ".$readPt[$i]->mobile_no."\n";
                echo "Pt. Age :  ".$readPt[$i]->age."\n";
                echo "-------------------------------------------------------------------------\n";
                return -1;
            }
            else
            {
                echo "Enter valid option......\n";
            }
        }
    } 

    function searchmonile_noPt($readPt)
    {
        echo "Enter mobile no to search\n";
        $mobile_no = utility::readVariable();
        for ($i = 0; $i < count($readPt); $i++)
        {
            if ($readPt[$i]->mobile_no == $mobile_no)
            {
            
                if(count($mobile_no==10))
                {
                    echo "\n .....Available Patients....\n\n";
                    echo "Pt. Id : ".$readPt[$i]->pid."\n";
                    echo "Pt. Name :  ".$readPt[$i]->pname."\n";
                    echo "Pt. Mobile No :  ".$readPt[$i]->mobile_no."\n";
                    echo "Pt. Age :  ".$readPt[$i]->age."\n";
                    echo "-------------------------------------------------------------------------\n";
                    return -1;
                }
                else
                {
                    echo "Enter valid option......\n";
                }
                
            }
        }
    }

    function searchagePt($readPt)
    {
        echo "Enter age to search\n";
        $age = utility::readVariable();
        for ($i = 0; $i < count($readPt); $i++)
        {
            if ($readPt[$i]->age == $age)
            {
                    echo "\n .....Available Patients....\n\n";
                    echo "Pt. Id : ".$readPt[$i]->pid."\n";
                    echo "Pt. Name :  ".$readPt[$i]->pname."\n";
                    echo "Pt. Mobile No :  ".$readPt[$i]->mobile_no."\n";
                    echo "Pt. Age :  ".$readPt[$i]->age."\n";
                    echo "-------------------------------------------------------------------------\n";
                    return -1;
            }
            else
            {
                echo "Enter valid option......\n";
            }
        }
    }

    


    function DoctorData($readDr)
    {
            echo "Enter your choice to search doctor :\n";
            echo "Press 1 to search by id\n";
            echo "Press 2 to search by name\n";
            echo "Press 3 to search by specialization\n";
            echo "Press 4 to search by availability\n";
            echo "Press 5 Exit\n";

            echo "Your choice is : ";
            $choice=Utility::getInt()."\n";
            $arr=$readDr;
            //$dr = new doctor;
            switch ($choice)
                {
                    case 1 : searchId($readDr);
                            break;
                    
                    case 2 : searchName($readDr);
                            break;
                             
                    case 3 : searchSpecilist($readDr);
                            break; 
                            
                    case 4: searchAvailabilitity($readDr);
                            break; 
            
                }

    }


    function PatientData($readPt)
    {
            echo "Enter your choice to search Patients :\n";
            echo "Press 1 to search by id\n";
            echo "Press 2 to search by name\n";
            echo "Press 3 to search by age\n";
            echo "Press 4 to search by mobile no\n";
            echo "Press 5 Exit\n";

            echo "Your choice is : ";
            $choice=Utility::getInt()."\n";
            $arr=$readPt;
            //$Pt = new doctor;
            switch ($choice)
                {
                    case 1 : searchIdPt($readPt);
                            break;
                    
                    case 2 : searchnamePt($readPt);
                            break; 
                            
                    case 3: searchagePt($readPt);
                            break; 
                           
                    case 4 : searchmonile_noPt($readPt);
                            break;
            
                }

    }

  
    function ClinicManagement($readDr, $readPt)
    {
       // $readDr1=$readDr;
       // $readPt1=$readPt;
        echo "Enter your choice to search doctor :\n";
        echo "Press 1 to search by Doctors\n";
        echo "Press 2 to search by Patients\n";
        echo "Enter your choice:";
        $choice=Utility::getInt();
        //getChoice();
        echo "--------------------------------------------------------------------------\n\n";
        switch($choice)
        {
            case 1 : DoctorData($readDr);
                    break;

            case 2 : PatientData($readPt);
                    break;

            default : echo "Enter valid option......\n\n";
                    break;
        }
    }
    

    //checking the user account
    $readDr = json_decode(file_get_contents("doctor.json")); 
    //  Menu1($readDr);

    //checking the user account
    $readPt = json_decode(file_get_contents("Patients.json"));
     //  Menu2($readPt); 

    // 
   ClinicManagement($readDr, $readPt);
  
?>