<?php

// delimeter can also be a newline
// numbers greater than 1000 are ignored

class StringCalculator {
    public function add($string) {
        $numbers = $this->parseNumbers($string);
        $solution = 0;
        foreach ($numbers as $number) {
            if ($number < 0 ) {
                throw new InvalidArgumentException('Invalid number provided: ' . $number);
            }
            // just skip anything over 1000
            if ($number >= 1000) continue;
            $solution += $number;
        }
        return $solution;
    }

    private function parseNumbers($string) {
        return preg_split('/(,|\\\n)/', $string);
    }
}

$stringCalc = new StringCalculator();
echo($stringCalc->add('2,3,3,1000'));
echo PHP_EOL;

$stringCalc2 = new StringCalculator();
echo($stringCalc2->add('2,3\n4,1000'));
echo PHP_EOL;
