<?php
class Stack
{
    public static $max = 1000;
    public $top = -1;
    public  $arr = null;
    //constructor for initializing the values
    public function __construct()
    { 
        //initializing an array with fixed size
        $this->arr = new SplFixedArray(Stack::$max);
        $this->top = -1; 
    } 
    //function to push the data in the stack requires data
    public function push($data)
    {
        if($this->top > (Stack::$max-1))
        {
            echo "stack overflow\n";
        }
        else
        {
            //pushing data to top
            $this->arr[++$this->top] = $data;
            echo "$data pushed into stack\n";
        }
    }
    /**
     * Function to remove the data from the stack 
     * 
     * @return data the data last stored 
     */
    public function pop()
    {
        if($this->top<0)
        {
            return -1; //stack underflow
        }
        else
        {
            //removed from top
            $x = $this->arr[$this->top--];
            return $x;
        }
    }
    /** function to return the last data stored **/
    public function peek()
    {
        if($this->top<0)
        {
            return -1; //stack underflow
        }
        else
        {
            //returns top data
            $x = $this->arr[$this->top];
            return $x;
        }
    }
    /**
     * function to check if the stack is emtpty or not
     */
    public function isEmpty()
    {
        if($this->top < 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
     /**
     * function to return the size of the stack
     * @return size of the stack
     */
    public function size()
    {
        if($this->top < 0)
        {
            return 0;
        }
        else
        {
            return ($this->top+1);
        }
    }
}
?>
