<?php
 /* 
        Author: Pr@chi
        Date: 02/03/2018
        Description: Data structure queue with its method implemented on linked list
*/

class Deque
{
    public $front = null;
    public $rear = null;
    public $arr = null;
    public $size = 0;
    /**
     * Constructor function to initialize the list 
     */
    public function __construct()
    {
        $this->front = -1;
        $this->rear = -1;
        $this->arr = array();
        $this->size = 0;
    }

     /**
     * function to push data at the start of the queue
     * @ item the item to be pushed
     */
    public function addFront($item)
    {
        //when no element is present
        if($this->front==-1 && $this->rear==-1)
        {
            $this->arr[++$this->front] = $item;
            $this->rear = $this->front;
            $this->size++;
        }
        //when element is present
        else
        {
            $this->front = $this->front-1;
            $this->arr[$this->front] = $item;
            $this->size++;
        }
    }

    /**
     * function to push data at the end of the queue
     * @ item the item to be pushed
     */
    public function addRear($item)
    {
        //when no element is present
        if($this->front==-1 && $this->rear==-1)
        {
            $this->arr[++$this->rear] = $item;
            $this->front = $this->rear;
            $this->size++;
        }
        //when element is present
        else
        {
            $this->rear = $this->rear+1;
            $this->arr[$this->rear] = $item;
            $this->size++;
        }
    }

    /**
     * Function to remove the item from the start of the list
     */
    public function removeFront()
    {
        //if only one element present
        if($this->front==$this->rear)
        {
            $item = $this->arr[$this->front];
            $this->front = $this->rear = -1;
            $this->size--;
        }
        //if more elements present
        else
        {
            $item = $this->arr[$this->front];
            $this->front = $this->front+1;
            $this->size--;
        }
        return $item;
    }


    /**
     * Function to remove the item from the end of the list
     */
    public function removeRear()
    {
        //if only one element present
        if($this->rear==$this->front)
        {
            $item = $this->arr[$this->rear];
            $this->rear = $this->front = -1;
            $this->size--;
        }
        //if more elements present
        else
        {
            $item = $this->arr[$this->rear];
            $this->rear = $this->rear-1;
            $this->size--;
        }
        return $item;
    }


    /**
     * Function to check the size of queue
     * @return size the size of the queue
     */
    public function size()
    {
        return $this->size;
    }
    
    /**
     * Function to check if the queue is empty or not
     * @return boolean true of false
     */
    public function isEmpty()
    {
        return ($this->size==0);
    }
}
?>