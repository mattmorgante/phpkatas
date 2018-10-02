<? 

function palindrome($string) { 
    $start = 0;
    $end = strlen($string) - 1;
    while ($start < $end) { 
        if ($string[$start] == $string[$end] || $string[$start + 1] == $string[$end] || $string[$start] == $string[$end -1]) { 
            $start++;
            $end--;
        } else { 
            return "false";
        }
    }
    return "true";
}

echo palindrome('racecar');
echo PHP_EOL;
echo palindrome('raceddddddcsar');
echo PHP_EOL;
echo palindrome('rdacecar');
echo PHP_EOL;
