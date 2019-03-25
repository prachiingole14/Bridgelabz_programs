<?php
  /**
     * @ author Pr@chi
     * @ since 13-03-2019
    */

class Node
{
    /*
     *Data to hold
     */
    public $data;
    /*
     *Link to next node
     */
    public $next;
    /**
     * Node constructor
     */
    public function __construct($item)
    {
        $this->data = $item;
        $this->next = null;
    }
}
class Queue
{
    public $front;
    public $rear;
    private static $size = 0;
    /**
     * function  to add the data to Queue
     */
    public function enqueue($data)
    {
        $new_node = new Node($data);
        /**
         * checking the Queue is empty or not
         */
        if ($this->isEmpty()) {
            $this->front = $new_node;
        } else {
            $this->rear->next = $new_node;
        }
        $this->rear = $new_node;
        /**
         * increases the size by adding the elements
         */
        self::$size++;
    }
    /**
     * function to check the Queue
     */
    public function isEmpty()
    {
        if ($this->front == null) {
            return true;
        }
        /**
         * returns false if it contains data
         */
        return false;
    }
    /**
     * function to remove or delete the elements from Queue
     */
    public function dequeue()
    {
        if (!$this->isEmpty()) {
            $val = $this->front->data;
            $this->front = $this->front->next;
        } else {
            echo "underflow\n";
        }
        if ($this->front == null) {
            $rear = null;
        }
        self::$size--;
        return $val;
    }
    /**
     * function to remove or delete the elements from Queue
     * used in queueCalanedar
     */
    public function dequeueOne()
    {
        if (!$this->isEmpty()) {
            $val = $this->front->data;
            $this->front = $this->front->next;
        } else {
            echo "underflow\n";
        }
        if ($this->front == null) {
            $rear = null;
        }
        // self::$size--;
        return $val;
    }
    /**
     * function to return the size of Queue
     */
    public function size()
    {
        return self::$size;
    }
    /**
     * function to display the data
     */
    public function display()
    {
        $temp = $this->front;
        while ($temp != null) {
            echo $temp->data . " ";
            $temp = $temp->next;
        }
    }
    /**
     * function to get the data from Queue
     */
    public function getData()
    {
        $str = "";
        $current = $this->front;
        while ($current != null) {
            $str = $str . $current->data . " ";
            $current = $current->next;
        }
        return $str;
    }
    public function peek()
    {
        return $this->front->data;
    }
}
