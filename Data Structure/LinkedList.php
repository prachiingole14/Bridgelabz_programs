<?php
     /*
        Author: Pr@chi
        Date: 06/03/2018
        Description: Ordered linked list with its methods
    */

    require_once ('Node.php'); 
    class LinkedList
    {
        public $front = null;
        public $last = null;
        public $size = 0;
        public function __construct()
        {
            $this->front = null;
            $this->last = null;
        }
        
        /**
         * Function to add the data in parameter at the start of linked list in order 
         * data the data to be added
         */
        public function add($data)
        {
            //check if list is empty
            if (!$this->front) 
                {
                        //add at first;
                        $node = new Node($data, null);
                        $this->front = $node;
                        $this->last = $node;
                        $this->size++;
                } 
            else 
                {
                    //check if data is less than the data in front
                        if ($data < $this->front->data) 
                        {
                            $node = new Node($data,$this->front);
                            $this->front = $node;
                            $this->size++;
                            return;
                        }

                        //stores in desired position
                        $current = $this->front;
                        while ($current) 
                        {
                            if ($current->data < $data && isset($current->next) && $current->next->data > $data) 
                            {
                                $node = new Node($data,$current->next);
                                $current->next = $node;
                                $this->size++;
                            }

                            if ($current->data < $data && !isset($current->next)) 
                            {
                                $node = new Node($data,$current->next);
                                $current->next = $node;
                                $this->size++;
                            }
                             $current = $current->next;
                
                        }
                }
        }

/*
    function to remove the data given as argument removes only if data is there 
*/
        public function remove($data)
        {
            $current = null;
            $temp = null;

            if($this->size==0)
            {
                echo "list is empty\n";
            }
                else if($this->front->data == $data && $this->front->next == null)
                {
                    $this->front =null;
                    $this->last = null;
                    echo "$data removed from list\n";
                    $this->size--;
                }
                    else if($this->front->data == $data && $this->front->next != null)
                    {
                        $temp = $this->front;
                        $this->front = $this->front->next;
                        $temp = null;
                        echo "$data removed from list\n";
                        $this->size--;
                    }
            else
            {
                $temp = $this->front;
                $current = $this->front->next;
                while($current!=null)
                    {
                        if($current->data == $data)
                            {
                                $temp->next = $current->next;
                                $current->next = null;
                                echo "$data removed from list\n";
                                $this->size--;
                                break;
                            }
                        else
                            {
                                $temp = $current;
                                $current = $current->next;
                            }
                    }
            }
        }

/*
    function to get the elements of list as string
*/
        public function getString()
        {
            $s = "";
            $node = $this->front;
            while ($node != null)
            {
                $s .= $node->data." ";
                $node = $node->next;
            }
            $s = substr($s,0,-1);
            return $s;
        }

        /**
         * Function to search the data in linked list 
         * @ return Boolean True if found and false if not found
         */
        public function search($data)
        {
            if($this->front==null)
            {
                return false;
            }
            $temp = $this->front;
            while($temp!=null)
            {
                if($temp->data == $data)
                {
                    return true;
                }
                else
                {
                    $temp = $temp->next;
                }
            }
            return false;
        }
        /**
         * Function to return the index of the given data
         * @ data $data the data which to give the index
         * @ return the index of the data 
         */
        public function index($data)
        {
            if($this->size==0)
            {
                echo "list is empty\n";
                return -1;
            }
            $temp = $this->front;
            $count = -1;
            while($temp!=null)
            {
                $count++;
                if($temp->data == $data)
                {
                    return $count;
                }
                else
                {
                    $temp = $temp->next;
                }
            }
            echo "item not found\n";
            return -1;
        }

        /**
         * function to remove the last element in the list and return it
         * @ return data which is removed
         */
        public function pop()
        {

            
            if($this->front == null)
            {
                echo "list is empty\n";
                return null;
            }

            if($this->front == $this->last)
            {
                $temp = $this->front->data;
                $this->front =  $this->last = null;
                return $temp;
            }

            else
            {
                $temp = $this->front;
                $current = $this->front;
                while($current->next != null)
                    {
                        $temp = $current;
                        $current = $current->next;
                    }

                $tdata = $current->data;
                $this->last = $temp;
                $temp->next = null;
                return $tdata;
            }
        }

        /*
          function to pop the element from the desired position
     */
        public function popPos($pos)
        {
            if($this->size==0)
            {
                echo "list is empty\n";
                return null;
            }

            $temp = $this->front;
            $current = $this->front;
            $count = -1;

            while($current!=null)
            {
                $count++;
                if($count == $pos && $count == 0)
                {
                    $this->first = $current->next;
                    $tdata = $current->data;
                    $current->next = null;
                    return $tdata;
                }

                    else if($count == $pos && $current == $this->last)
                    {
                        $tdata = $current->data;
                        $this->last = $temp;
                        $temp->next = null;
                        return $tdata;
                    }

                        else if($count==$pos)
                        {
                            $tdata = $current->data;
                            $temp->next = $current->next;
                            $current->next = null;
                            return $tdata;
                        }

                $temp = $current;
                $current = $current->next;
            }

            echo "given position is not found in list\n";
            return null;
        }
        
/* function to check if the list is empty or not */
        public function isEmpty()
        {
            if($this->size==0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

/* function to return the size of linked list */
        public function size()
        {
            return $this->size;
        }
        
/** function to print list elements **/
        public function printl()
        {
            $current = $this->front;
            while($current)
            {
                echo $current->data." ";
                $current = $current->next;
            }
            echo "\n";
        }
    }
?>