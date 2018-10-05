<?
class DeckOfCards
{
    public $cards = array(2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K", "A");
    public $suits = array("D", "H", "S", "C");

    public function __construct()
    {
        // Create the deck
        $deck = $this->createDeck();
        print_r($deck);

    }

    private function createDeck()
    {
        $deck = [];
        for ($i = 0; $i < 13; $i++) {
            for ($x = 0; $x < 4; $x++) {
                array_push($deck, $this->cards[$i] . $this->suits[$x]);
            }
        }
        return $deck;
    }
}

$myGame = new DeckOfCards();
