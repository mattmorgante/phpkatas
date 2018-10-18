<?

//
function firstNonRepeated($string) {
 	$array = str_split($string);
 	$previous = $array[0];
 	for ($i=1; $i < count($array); $i++) {
 		if ($previous == $array[$i]) {
 			return $array[$i];
 		} else {
 			$previous = $array[$i];
 		}
 	}
 	return  "false";
}
echo firstNonRepeated('heloabc');


// in this one, find first non-repeated anywhere in string 
// not just right after the other
function firstNonRepeat2($string) { 
	$array = str_split($string);
	$characters = [];
	foreach ($array as $value) { 
		if (array_key_exists($value, $characters)) {
			unset($characters[$value]);
		} else {
            $characters[$value] = 1;
		}
	}
	foreach ($characters as $key => $value) {
		return $key;
	}
}

echo firstNonRepeat2('abvba');