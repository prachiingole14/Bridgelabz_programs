<?php 
/**
 *  Data structure queue with its method implemented on linked list
 */
  require_once ('Element.php');
  class Queue
  { 
    private $front = null;
    private $back = null;
    private $size = null; 
    
    /**
       * Constructor function to initialize the list 
    **/
    public function __construct()
    {
          $this->front = null;
          $this->back = null;
          $this->size = null;
    
    }
    
    /**
       * Function to check if the queue is empty or not
       * @return boolean true of false
       */
    public function isEmpty()
    {
      return $this->front == null;
    }
    
      /*
         function to push data at the end of the queue
         item the item to be pushed
       */
    public function enqueue($value)
    {
      $oldback = $this->back;
      //last pointing to new node
      $this->back = new Element(); 
      $this->back->value = $value;
      if($this->isEmpty())
      {
        //if empty both first and last point to the new node
        $this->front = $this->back;
        $this->size++; 
      }
      else
      {
        //else last point to new node
        $oldback->next = $this->back;
        $this->size++; 
      }
    }
    
    /**
       * Function to remove the item from the start of the list
       */
    public function dequeue()
    {
      if($this->isEmpty())
      {
        echo "the queue is empty\n";
        return null; 
      }
      //removing first value and modifying queue 
      $removedValue = $this->front->value;
      $this->front = $this->front->next;
      $this->size--;
      return $removedValue;
    }
    /**
       * Function to check the size of queue
       * @return size the size of the queue
       */
    public function size()
    {
      return $this->size;
    }
    
    public function getData()
    {
      $temp = $this->front;
      $str = "";
      while($temp)
      {
          $str = $str.$temp->data;
          if($temp->next!=null)
          {
              $str = $str." ";
          }
          $temp = $temp->next;
      }
      return $str;
    }
  }
?>
