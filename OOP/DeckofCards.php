<?php

 /*
     * @ author Pr@chi
     * @ since 13-03-2019
     * @ Description: Write a Program DeckOfCards.java , to initialize deck of cards having suit ("Clubs",
                "Diamonds", "Hearts", "Spades") & Rank ("2", "3", "4", "5", "6", "7", "8", "9", "10",
                "Jack", "Queen", "King", "Ace"). Shuffle the cards using Random method and then
                distribute 9 Cards to 4 Players and Print the Cards the received by the 4 Players
                using 2D Array...
    */

 include "Utility.php";
    class card
    {
        /**
         * variables to store properties od cars
         */
        public $suit;
        public $rank;

        /**
         * constructor of class
         */
        public function __construct($suit, $rank)
        {
            $this->suit = $suit;
            $this->rank = $rank;
        }
    }

    /**
     * finction to give the deck of cards as 2d array
     * @return arr the 2d array of the deck
     */
    function getDeck()
    {
        /**
         * no of suits in the deck
         */
        $suits = ["♣", "♦", "♥", "♠"];
        //no of ranks in the deck
        $rank = [2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
        //deck array  wth the empty value
        $deck = [];
        for ($index = 0; $index < count($suits); $index++)
         {
            for ($indexj = 0; $indexj < count($rank); $indexj++) 
            {
                //giving the values of cards in the deck array
                $deck[$index][$indexj] = new card($suits[$index], $rank[$indexj]);
            }
        }
        return $deck;
    }

    /**
     * shuffle the deck of cards and return it
        * @param deck the 2d array containing deck of cards
     * @return deck the shuffled deck of cards
     */
    function cardShuffle($deck)
    {
        for ($index = 0; $index < count($deck); $index++)
        {
            for ($indexj = 0; $indexj < count($deck[$index]); $indexj++)
             {
                $rOne = rand(0, 3);
                $cOne = rand(0, 12);
                $r = rand(0, count($deck));
                $rOne = rand(0, 3);
                $r = rand(0, count($deck));
                $cTwo = rand(0, 12);
                $r = rand(0, count($deck));
                $temp = $deck[$rOne][$cOne];
                $r = rand(0, count($deck));
                $deck[$rOne][$cOne] = $deck[$rOne][$cTwo];
                $deck[$rOne][$cTwo] = $temp;
            }
        }
        return $deck;
    }

    /** 
     * distribute the deck of cards between 4 players
     * @param deck the deck of cards 2d array (Shuffled)
     * @return players the 2d array of distributed cards
     */
    function distribute($deck)
    {
        $players = [];
        for ($index = 0; $index < 4; $index++)
        {
            for ($indexj = 0; $indexj < 9; $indexj++) 
            {
                $r = rand(0, 3);
                $c = rand(0, count($deck[$r]) - 1);
                $players[$index][$indexj] = $deck[$r][$c];
                array_splice($deck[$r], $c, 1);
            }
        }
        return $players;
    }

    /**
     * Sort the player distributed cards and return it
     * @param player the 2d array containing the distributed cards
     * @return player the sorted distributed cards
     */
    function sortPlayer($player)
    {
        for ($k = 0; $k < 4; $k++) {
            for ($index = 1; $index < count($player[$k]); $index++) {
                // getting value for back element
                $indexj = ($index - 1);
                //saving it in temperary variable;
                $temp = $player[$k][$index];
                while ($indexj >= 0 && $player[$k][$indexj]->rank >= $temp->rank) {
                    $player[$k][$indexj + 1] = $player[$k][$indexj];
                    $indexj--;
                }
                $player[$k][$indexj + 1] = $temp;
            }
        }
        return $player;
    }

    /**
     * function to display the 2d array of distributed cards b/w 4 players
     * @param player the 2d array containing the cards to display
     */
    function showCards($player)
    {
        $special = ["Jack", "Queen", "King", "Ace"];
        for ($index = 0; $index < count($player); $index++) 
        {
            $print = "{";
            echo "\n\nPlayer " . ($index + 1) . ":";
            for ($indexj = 0; $indexj < count($player[$index]); $indexj++) 
            {
                if ($player[$index][$indexj]->rank > 10) 
                    {
                        $print .= $special[$player[$index][$indexj]->rank % 11] . $player[$index][$indexj]->suit . ",";
                    } 
                else
                    {
                        $print .= $player[$index][$indexj]->rank . $player[$index][$indexj]->suit . ",";
                    }
            }

            $print = substr($print, 0, -1);
            echo $print . "}";
        }

        echo "\n";
    }

    /**
     * function to run and test the program
     */
    function run()
    {
        echo "Deck of cards \n";
        fscanf(STDIN, "%s\n");
        $deck = getDeck();
        echo "enter to shuffle \n";
        fscanf(STDIN, "%s\n");
        $deck = cardShuffle($deck);
        echo "Enter to distribute";
        fscanf(STDIN, "%s\n");
        $players = distribute($deck);
        $players = sortPlayer($players);
        //print_r($players);
        showCards($players);
    }
    
    //running the program
    run();
?>