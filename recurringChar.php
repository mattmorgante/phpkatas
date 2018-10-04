<? 

function findRecurringChar($string) { 
    $array = str_split($string);
    $characters = [];
    foreach($array as $value) { 
        if (in_array($value, $characters)) { 
            return $value; 
        }
        array_push($characters, $value);
    }
    return "false";
}

$string = "dcbaba";
$string2 = "asdfghjkl";
echo findRecurringChar($string);