<?
// return the first repeated character in a string
// if it doesn't repeat any characters, return false

function firstRepeat($string) {
    $array = str_split($string);
    $characters = [];
    foreach ($array as $item) {
        if (in_array($item, $characters)) {
            return $item;
        } else {
            array_push($characters, $item);
        }
    }
    return "false";
}
echo firstRepeat('abcdc');