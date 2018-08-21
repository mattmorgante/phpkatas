<?php

class FizzBuzz {
    public function run($numbers)
    {
        $response = '';
        foreach ($numbers as $number) {
            if ($number % 15 == 0 ) {
                $response .= 'fizzbuzz';
            } elseif ($number % 5 == 0 ) {
                $response .= 'buzz';
            } elseif ($number % 3 == 0) {
                $response .= 'fizz';
            } else {
                $response .= $number;
            }
        }
        return $response;
    }
}

$fizzer = new FizzBuzz();
echo($fizzer->run(range(1,100)));
echo PHP_EOL;

