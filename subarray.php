<? 

// give an array of integers, return the subarray with the largest sum 

function subarray($myArray) { 
    $currentSum = $myArray[0];
    $totalSum = $myArray[0];

    for ($i = 1; $i < count($myArray); $i++) { 
        $currentSum = max($myArray[$i], $currentSum + $myArray[$i]);
        $totalSum = max($totalSum, $currentSum);
    }

    return $totalSum;
}

$myArray = [-2,2,1,-3,2,4,2];
echo subarray($myArray);