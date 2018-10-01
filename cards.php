<?php
/**
 * want to create something like
 * $deck = [0,1],[0,2],[0,3]....[3,13]
 */

class Deck {

    public $allSuits = [
      0 => 'Diamonds',
      1 => 'Hearts',
      2 => 'Spades',
      3 => 'Clubs'
    ];

    public function __construct()
    {
        $deck = [];
        foreach ($this->allSuits as $suit) {
            $counter = 1;
            while ($counter <= 13) {
                $deck[$suit] = $counter;
                $counter++;
            }
        }
        var_dump($deck);
    }
}

$myDeck = new Deck();

