
<?php
    /**
     * Program is the demonstration for proxy desingn pattern in php 
     */
    //require the following to work
    require "Utility.php";
    require_once ('CommandExecutorProxy.php');
    /**
     *testing the proxy implementation
     */
    echo "\n PROXY PATTERN\n\n";
    //taking username and password from the user
    echo "enter the user name\n";
    $user = Utility::getInt();
    echo "enter the password\n";
    $pswd = readline(" ");
    //instantiating CommandExecutorProxy class 
    $executor = new CommandExecutorProxy($user,$pswd);
    
    /**
     * try catch block to catch and handle the exception
     */
    try 
    {
        //calling runCommand function of CommandExecutorProxy class
        $executor->runCommand("ls -ltr");
        $executor->runCommand(" php_tutorial.pdf");
    } 
    catch (Exception $e) 
    {
        //catching the exception
        echo "Exception Message::".$e->getMessage()."\n";
    }
    
?>
