<?php
 /*
    Author: Pr@chi
    Date: 07/03/2018
   Description: Program which creates Banking Cash Counter where people come in to deposit Cash and withdraw Cash. 
   Have an input panel to add people to Queue to either deposit or withdraw money and dequeue the people. Maintain the Cash Balance.
 */

 //requires following function to work
 require ('Utility.php');
 require_once ('Queue.php');
 
 class Banking
 {
    public $cashbalance;
    public $list;
  
    public function __construct()
    {
        //initializing a queue to store the data
        $this->list = new Queue();
        $this->cashbalance=10000;
    }
    
    /**
     *  function that manipulates the cash and deposit the cash
     */
    public function cash_Deposit($amount)
    {
        $this->list->enqueue($amount);
    }
    /**
     *  function to manipulates cash at withdrawel
     */
    public function cash_Withdraw($amount)
    {
        $this->cash_Deposit(-$amount);
    }
    /** options provided for the customer to deposit or withdraw cash using switch case **/
    public function process()
    {
        echo "press 1 to enter bank or 0 to not come in\n";
        
        //taking user input for to enter the bank or not
        $z = Utility::integer_Input();
        if($z ==1)
        {
            echo "enter the amount to be transacted\n";
           
            //taking the amount from user
            $amount = Utility::integer_Input();
            
            //depositing the amount
            $this->cash_Deposit($amount);
            //getting the transaction amount from user
            $transactionAmount =$this->list->dequeue();
            echo "press 1 for amount deposition 2 for amount withdrawl and 3 for exit\n";
            
            //taking input for option
            $num = Utility::integer_Input();
            while($num!=3 )
            {
                switch($num)
                {
                    case 1 :
                            {
                                //deposit the transaction amount and adding to available bal
                                echo "Amount deposition\n";
                                $this->cashbalance += $transactionAmount;
                                echo "amount deposited is $transactionAmount\n";
                                echo "Your balance: $this->cashbalance\n";
                                return;
                                
                            }
                            break ;
                    case 2 :
                            {
                                if($transactionAmount>0)
                                { 
                                    echo "Amount withdraw\n";
                                    if($this->cashbalance < $transactionAmount)
                                    {
                                        //no sufficient balance
                                        echo "their is no sufficient amount to perform withdrawal of $transactionAmount\n";
                                        echo "Your balance  is $this->cashbalance\n";
                                        echo "Thank you for your transaction...\n";
                                        return;
                                    }
                                    else
                                    {
                                        //withdraw the amount from available bal and deducting the balance
                                        $cashBalance = $this->cashbalance-$transactionAmount;
                                        echo "amount withdrawn is $transactionAmount\n";
                                        echo "total amount is $cashBalance\n";
                                    echo "Thank you for your transaction...\n";
                                        return;
                                    }
                                    return;
                                }
                                else
                                {
                                    //get executed if we give negative amount
                                    echo "invalid transaction amount cant withdraw\n";
                                    return;
                                }
                            }
                            break;
                    case 3 :
                            {
                                //to exit
                                echo "Thank you...\n";
                                return;
                            }
                            break;
                   default : return;
                             break; 
                }
            }
        }
        elseif($z == 0)
        {
            echo "Thank you....\n";
            
        }
    }
}
//creating a new banking object
$counter = new Banking();
//calling the process function
$counter->process();
?>