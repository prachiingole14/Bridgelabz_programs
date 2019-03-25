<?php
    //require following function to work
    require_once ('CommandExecutor.php');
    /**
     * proxy class for the class command executor
     */
    class CommandExecutorProxy 
    {
        //private member functions
        private $isAdmin;
        private $executor;
        
        /**
         * parameterised constructor 
         * @param user username given by user
         * @param pwd password given by user
         */
        function __construct($user,$pwd)
        {
            //comparing passed username and password with admin's username and password
            if((strcmp("Pankaj",$user)==0) && (strcmp("J@urnalDv",$pwd)==0))
            { 
                //if yes setting user as admin
                $this->isAdmin = true;
            }
            //instantiating CommandExecutor class
            $this->executor = new CommandExecutor();
        }
        
        /**
         * function runcommand of the proxy class which checks the ownership and gives 
         * permission for the execution of commands
         * @param cmd command passed for execution
         */
        public function runCommand($cmd) 
        {
            //checking ownership
            if($this->isAdmin)
            {
                //if yes giving permission to execute all commands 
                $this->executor->runCommand($cmd);
            }
            else
            {
                //to trim trailing zero's
                $str = trim($cmd);
                //checking the particular command for which permission should not 
                //be given for non admin's
                if(strcmp(substr($str,0,2),"rm")==0)
                {
                    //if that particular command then throws exception
                    throw new Exception("rm command is not allowed for non-admin users.");
                }
                else
                {
                    //if not that command the giving permission to excecute
                    $this->executor->runCommand($str);
                }
            }
        }
    
    }
?>
