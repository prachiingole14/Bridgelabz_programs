<?php
/**
    * Author : Pr@chi
    * Date : 24/03/2019
    * Description: Implementation of observer design pattern
 ****************************************************************************************************/

 /**
 * top level exception handler function to handle exception
 */
set_exception_handler(function ($e) 
{
    echo "\nException Occurred\n";
    echo $e->getMessage();
});

require_once 'subject.php';
require_once 'patternObserver.php';

/**
 * class using inheritance to get super class properties
 */
class PatternSubject extends AbstractSubject
{
    private $favoritePatterns = null;
    private $observers = array();

    // intilision of  constructor
    public function __construct()
    {}
    
    /**
     * function to attach the updated data
     * 
     */
    public function attach(AbstractObserver $observer_in)
    {
        //could also use array_push($this->observers, $observer_in);
        $this->observers[] = $observer_in;
        echo "Dhoni attached to squad\n\n";
    }

    /**
     * function to detach the updated data
     * using generlisation
     */
    public function detach(AbstractObserver $observer_in)
    {
        //$key = array_search($observer_in, $this->observers);
        foreach ($this->observers as $okey => $oval) 
        {
            if ($oval == $observer_in) 
            {
                unset($this->observers[$okey]);
                echo "Dhoni detached from squad\n\n";
            }
        }
    }

    /**
     * function to notify the updated data
     * using generlisation
     */
    public function notify()
    {
        foreach ($this->observers as $obs)
        {
            $obs->update($this);
        }
    }

    /**
     * function to updateFav the updated data
     * 
     */
    public function updateFavorites($newFavorites)
    {
        $this->favorites = $newFavorites;
        $this->notify();
    }

    /**
     * function to detach the updated data
     * @return favorites
     */
    public function getFavorites()
    {
        return $this->favorites;
    }
}
?>