<?php

class RomanNumeralsConverter {

    public static $lookup = [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I'
    ];

    public static function convert($number) {
        // build a string to return
        $solution = '';
        foreach (static::$lookup as $iterator => $numeral) {
            // basic structure = slowly reduce the number while adding the numerals
            while ($number >= $iterator) {
                // omg while loops
                // while loop = runs until a condition is met
                // for loop = pre-determined number of times
                $solution .= $numeral;
                $number -= $iterator;
            }
        }
        return $solution;
    }
}

echo RomanNumeralsConverter::convert(1);
echo PHP_EOL;
echo RomanNumeralsConverter::convert(4);
echo PHP_EOL;
echo RomanNumeralsConverter::convert(5);
echo PHP_EOL;
echo RomanNumeralsConverter::convert(10);
echo PHP_EOL;
echo RomanNumeralsConverter::convert(11);
echo PHP_EOL;
echo RomanNumeralsConverter::convert(20);
echo PHP_EOL;
echo RomanNumeralsConverter::convert(50);
echo PHP_EOL;
echo RomanNumeralsConverter::convert(100);
echo PHP_EOL;
echo RomanNumeralsConverter::convert(500);
echo PHP_EOL;
echo RomanNumeralsConverter::convert(1000);
echo PHP_EOL;
echo RomanNumeralsConverter::convert(4990);
echo PHP_EOL;
