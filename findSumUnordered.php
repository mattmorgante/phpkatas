<? 

// given an array and a sum 
// determine if the sum is in any pair of the array
// the array is not necessly ordered 

function findSumUnordered($array, $sum) { 
    // store the complements in an array 
    $complements = [];
    foreach ($array as $value) { 
        $currentComp = $sum - $value;
        if (in_array($value, $complements)) { 
            return "true";
        } else { 
            array_push($complements, $currentComp);
        }
    }
    return "false";
}

$array1 = [1,2,3,5];
$array2 = [4,2,4,4];
$sum = 8;

echo findSumUnordered($array1, $sum);
echo PHP_EOL;
echo findSumUnordered($array2, $sum);
