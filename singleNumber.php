<? 

// given an array of numbers 
// find the only element that is not repeated 

function findSingle($values) { 
    $elements = [];
    foreach ($values as $value) { 
        if (array_key_exists($value, $elements)) { 
            $elements[$value] = 2;
        } else {
            $elements[$value] = 1;
        }
    }
    return array_search(1, $elements);
}
$values = [2,3,4,2,4];
echo findSingle($values);