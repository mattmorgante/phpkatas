<?
function compressString($string) {
    $returnString = "";
    $array = str_split($string);
    $current = $array[0];
    $counter = 1;

    for ($i = 1; $i <= count($array); $i ++) {
        if ($array[$i] == $current) {
            $counter++;
        } else {
            $returnString .= $current . $counter;
            $current = $array[$i];
            $counter = 1;
        }
    }
    return $returnString;
}
echo compressString('aaabbcccc');