<? 

// given a sorted array and a sum, return true if two numbers in the array equal the sum 

function findSum($array, $sum){ 
    $low = 0;
    $high = count($array) - 1;
    while ($low < $high) { 
        $currentSum = $array[$low] + $array[$high];
        if ($currentSum == $sum) { 
            return "true";
        } elseif ($currentSum < $sum) { 
            $low++;
        } elseif ($currentSum > $sum) { 
            $high--;
        }
    }
    return "false";
}

$array1 = [1,2,3,9];
$array2 = [1,2,4,4];
$sum = 8;

echo findSum($array1, $sum);
echo PHP_EOL;
echo findSum($array2, $sum);

