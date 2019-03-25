<?php
require_once ('SinglyLinkedList.php');
class LinkedListStack
{
    //creating the list to store stack values
    public $list;
    //constructor for initializing the values
    public function __construct()
    {
        $this->list = new SinglyLinkedList();
    }
    //function to push the data in the stack 
    public function push($item)
    {
        $this->list->append($item);
    }
    /**
     * in function pop
     * Function to remove the data from the stack 
     * 
     * @return data the last stored data
     */
    public function pop()
    {
        if($this->list->isEmpty())
        {
            echo "stack is empty\n";
        }
        else
        {
            return $this->list->pop();
        }
    }
    
    /**
     * function to return the size of thre stack
     * @return size of the satch
     */
    public function size()
    {
        return $this->list->size();
    }
    /**
     * function to check if the stack is emtpty or not
     */
    public function isEmpty()
    {
       return $this->list->isEmpty();
    }
    //function to get the stack elements as array
    public function getArray()
    {
        return $this->list->array();
    }
}
?>