<?

// returns true or false depending on if the pair is in the array
function findPair($array, $sum) {
    $complements = [];
    foreach ($array as $item) {
        $complement = ($sum - $item);
        if (in_array($item, $complements)) {
            return "true";
        } else {
            array_push($complements, $complement);
        }
    }
    return "false";
}

$array = [1,2,5,9];
$sum = 6;
echo findPair($array, $sum);