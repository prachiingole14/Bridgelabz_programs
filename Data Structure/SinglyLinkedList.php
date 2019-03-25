
<?php
/*** Singly linked list with its methods ***/
require_once ('Node.php');
class SinglyLinkedList 
{
   public $first=null;
   public $last=null;
   public $size=0;
   
    /**
     * Function to add the data at the start of linked list
     * 
     * @param data the data to be added
     */
   public function add($data)
   {
        if($this->first == null)
        {
            //creatin new node with data 
            $n = new Node($data, null);
            $this->first =$n;
            $this->last =$n;
            $this->size++;
            
        }
        else
        {
            if(!($this->search($data)))
            {
                $temp =$this->first;
            if($temp !=null)
                {
                    //creatin new node with data 
                    $n=new Node($data,null);
                    $this->first = $n;
                    $n->next = $temp;
                }
                
                $this->size++;
           }
          
        }
    
    }
    public function printl()
    {
        $curr = $this->first;
        while($curr)
        {
            echo $curr->data." ";
            $curr=$curr->next;
        }
    }
    
    public function array()
    {
        $arr = array();
        $i = 0;
        $curr = $this->first;
        while($curr)
        {
            $arr[$i++] = $curr->data;
            $curr=$curr->next;
        }
        return $arr;
    }
   
    /**
     * function to check if the list is empty or not 
     */
    public function isEmpty()
    {
        if($this->first == null)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
     /**
     * function to return the size of linked list
     */
    public function size()
    {
        $count =0;
        $temp = $this->first;
        while($temp != null)
        {
            $count++;
            $temp = $temp->next;
        }
        return $count;
    }
    
     /**
     * Function to search the data in linked list 
     * 
     * 
     * @return Boolean True if found and false if not found
     */
    public function search($search)
    {
        if($this->first == null)
        {
            return false;
        }
        else
        {
            $temp = $this->first;
            while($temp != null)
            {
                if($temp->data==$search)
                {
                    return true;
                }
                else
                {
                    $temp =$temp->next;
                }
            }
            return false;
        }
    }
    
    /**
     * function to remove the data given as argument removes only if data is there 
     */
    public function remove($data)
    {
        $current = null;
        $temp = null;
        if($this->size==0)
        {
            echo "list is empty\n";
        }
        else if($this->first->data == $data && $this->first->next == null)
        {
            $this->first =null;
            $this->last = null;
            echo "$data removed from list\n";
            $this->size--;
        }
        else if($this->first->data == $data && $this->first->next != null)
        {
            $temp = $this->first;
            $this->first = $this->first->next;
            $temp = null;
            echo "$data removed from list\n";
            $this->size--;
        }
        else
        {
            $temp = $this->first;
            $current = $this->first->next;
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
    /**
     * Function to add data at the end of the list 
     */
    public function append($item)
    {
        //checking if the list is empty and if it will add at the start
        if($this->isEmpty() == true)
        {
            //creatin new node with data 
            $this->first = new Node($item,null);
            $this->last = $this->first;
            $this->size++;
            return true;
        }
        elseif($this->search($item))
        {
           // checking whether it already exists";
            return false;
        }
        else
        {
            //creatin new node with data 
            $newnode = new Node($item,null);
            //traversing to the last node 
            $this->last->next =$newnode;
            $this->last = $newnode;
            $this->size++;
            return true;
        }
    }
     
    /**
     * function to insert the data at the given position 
     * @param pos the position / index at which to insert the data 
     * @param data the data which to insert
     */
    public function insert_At_Pos($pos,$item)
    {
        $prev=$this->first;
        $curr =$this->first;
        //creatin new node with data 
        $newnode =new Node($item, null);
        $count=-1;
        while($curr !=null)
        {
            $count++;
            // checks if the index is 0 ie first
            if($count ==$pos && $count ==0)
            {
                $newnode->next = $curr;
                $this->first = $newnode;
                return true;
                break;
            }
            elseif($count ==$pos)
            {
                $newnode->next = $curr;
                $prev->next = $newnode;
                return true;
            }
            $prev = $curr;
            $curr =$curr->next;
        }
        //checks if index is the last value
        if($curr == null && $pos == $count+1)
        {
            $prev->next =$newnode;
            $last = $newnode;
            return true;
        }
        else
        {
            echo "given pos is not found in list itself...";
            return false;
        }
    }
    /**
     * function to pop the element from the desired position
     * */
    public function popPos($pos)
    {
        if($this->size==0)
        {
            echo "list is empty\n";
            return null;
        }
        $temp = $this->first;
        $current = $this->first;
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
    
    /**
     * function to remove the last element in the list and return it
     * 
     * @return data which is removed
     */
    public function pop()
    {
        try
        {
            if($this->first == null)
            {
                echo "list is empty\n";
                return null;
            }
            if($this->first == $this->last)
            {
            $temp = $this->first->data;
            $this->first =  $this->last = null;
            return $temp;
            }
            else
            {
                $temp = $this->first;
                $current = $this->first;
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
        }catch (Exception $e)
        {
            echo "\n", $e->getMessage(), "\n";
        }
            
    }
    
    /**
     * Function to return the index of the given data
     * @param data $data the data which to give the index
     * @return the index of the data 
     */
    public function index($data)
    {
        if($this->size==0)
        {
            echo "list is empty\n";
            return -1;
        }
        $temp = $this->first;
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
}
?>
