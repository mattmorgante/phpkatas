<? 
function compress($string) { 
	$newString = "";
	$array = str_split($string);
	$current = $array[0];
	$count = 1;
	for ($i =1; $i <= count($array); $i++) { 
		if ($array[$i] == $current) { 
			$count++;
		} else { 
			$newString .= $current . $count;
			$current = $array[$i];
			$count = 1;
		}
	}
	return $newString;
}
echo compress('aabccc');
