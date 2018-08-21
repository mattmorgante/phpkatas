<?php

// 10 frames, each with 1 or 2 shots
// spare? points from next throw are doubled
// strike? points in next two throws are doubled

class BowlingGame {

    // form an array of each roll
    protected $rolls = [];

    public function roll($pins) {
        if ($pins < 0 ) {
            throw new InvalidArgumentException();
        }
        // add to the array each time roll is called
        $this->rolls[] = $pins;

    }

    public function score() {
        // initialize a score and a roll iterator
        $score = 0;
        $roll = 0;

        for ($frame =1; $frame <= 10; $frame++) {
            if ($this->isStrike($roll)) {
                $score += 10 + $this->rolls[$roll+1] + $this->rolls[$roll+2];
                $roll += 1;
            } elseif ($this->isSpare($roll)) {
                $score += 10 + $this->rolls[$roll+2];
                $roll += 2;
            } else {
                $score += $this->getDefaultFrameScore($roll);
                $roll += 2;
            }
        }
        return $score;
    }

    private function isStrike($roll) {
        if ($this->rolls[$roll] == 10) {
            return true;
        } else {
            return false;
        }
    }

    private function isSpare($roll) {
        if ($this->getDefaultFrameScore($roll) == 10) {
            return true;
        } else {
            return false;
        }
    }

    private function getDefaultFrameScore($roll) {
        return $this->rolls[$roll] + $this->rolls[$roll + 1];
    }

    public function rollSpare($game) {
        $game->roll(8);
        $game->roll(2);
    }

    public function rollTimes($count, $pins) {
        for ($i = 0; $i<$count; $i++) {
            $this->roll($pins);
        }
    }
}

$game1 = new BowlingGame();
$game1->rollTimes(20, 2);

echo($game1->score());
echo PHP_EOL;


$game2 = new BowlingGame();
$game2->rollSpare($game2);
$game2->roll(6);
$game2->rollTimes(17, 0);

echo($game2->score());
echo PHP_EOL;

$game3 = new BowlingGame();

$game3->roll(10);
$game3->roll(7);
$game3->roll(2);
$game3->rollTimes(17, 0);
echo($game3->score());
echo PHP_EOL;
// should be 28

$perfectGame = new BowlingGame();
$perfectGame->rollTimes(20,10);
echo($perfectGame->score());
echo PHP_EOL;