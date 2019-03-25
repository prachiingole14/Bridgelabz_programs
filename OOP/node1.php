
  
<?php
//creating a node class
class Node1
{
    //node holds data and have next pointer
    public $data;
    public $next;
 
    //constructor to initialize 
    public function __construct($data,$next)
    {
        $this->data = $data;
        $this->next = $next;
    }
}
?>