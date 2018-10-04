<? 
// function firstNonRepeated($string) { 
// 	$array = str_split($string);
// 	$previous = $array[0];
// 	for ($i=1; $i < count($array); $i++) {
// 		if ($previous == $array[$i]) {
// 			echo $array[$i];
// 			die;
// 		} else {
// 			$previous = $array[$i]; 
// 		}
// 	}
// 	echo  "false";	
// }
// echo firstNonRepeated('heleeoabcc');


// in this one, find first non-repeated anywhere in string 
// not just right afer the other
function firstNonRepeat2($string) { 
	$array = str_split($string);
	$array2 = [];
	foreach ($array as $value) { 
		if (array_key_exists($value, $array2)) { 
			unset($array2[$value]);
		} else {
			$array2[$value] = 1;
		}
	}
	foreach ($array2 as $key => $value) { 
		return $key;
	}
}

echo firstNonRepeat2('abvba');