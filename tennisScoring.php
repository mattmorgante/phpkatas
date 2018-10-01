<?php

class Tennis {
    // class-wide attributes that are available as $this->attribute
    // should be created in the constructor, where they are type-hinted as class player
    protected $player1;
    protected $player2;

    protected $lookup = [
        0 => 'Love',
        1 => '15',
        2 => '30',
        3 => '40'
    ];

    public function __construct(Player $player1, Player $player2) {
        $this->player2 = $player2;
        $this->player1 = $player1;
    }

    public function score() {
        // work your way down in points
        if ($this->hasAWinner()) {
            return 'Win for ' . $this->leader()->name;
        }

        if ($this->isDeuce()) {
            return 'Deuce';
        }

        if ($this->hasTheAdvantage()) {
            return 'Advantage for ' . $this->leader()->name;
        }

        $firstScore = $this->lookup[$this->player1->points];
        $secondScore = $this->lookup[$this->player2->points];

        if ($firstScore != $secondScore) {
            return $firstScore . '-' . $secondScore;
        } else {
            return $firstScore . '-All';
        }
    }

    private function hasTheAdvantage() {
        return $this->hasMinimumWinnablePoints() && !$this->isLeadingByTwo();
    }

    private function hasAWinner() {
        return $this->hasMinimumWinnablePoints() && $this->isLeadingByTwo();
    }

    private function hasMinimumWinnablePoints() {
        return max([$this->player1->points, $this->player2->points]) >= 4;
    }

    private function isLeadingByTwo() {
        return abs($this->player1->points - $this->player2->points) >= 2;
    }

    public function leader() {
        return $this->player1->points > $this->player2->points ? $this->player1 : $this->player2;
    }

    private function isDeuce()
    {
        return ($this->player1->points == $this->player2->points) && (($this->player1->points +
            $this->player1->points) >= 6);
    }
}

class Player {
    public $points;
    public $name;

    public function __construct($name, $points)
    {
        $this->points = $points;
        $this->name = $name;
    }

    public function earnPoints($points) {
        $this->points += $points;
    }
}


$jane = new Player('Jane', 0);
$john = new Player('John', 0);
$game = new Tennis($jane, $john);
$jane->earnPoints(2);
$john->earnPoints(2);
$jane->earnPoints(1);
// should be thirty all
echo($game->score());
echo PHP_EOL;


$game2 = new Tennis($jane, $john);
$jane->earnPoints(3);
$john->earnPoints(1);
echo($game2->score());
echo PHP_EOL;

//
$game3 = new Tennis($jane, $john);
$jane->earnPoints(4);
$john->earnPoints(3);
echo($game3->score());
echo PHP_EOL;

$game4 = new Tennis($jane, $john);
$jane->earnPoints(8);
$john->earnPoints(10);
echo($game4->score());
echo PHP_EOL;
