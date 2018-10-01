<? 
function firstNonRepeated($string) { 
	$array = str_split($string);
	$previous = $array[0];
	for ($i=1; $i < count($array); $i++) {
		if ($previous == $array[$i]) {
			echo $array[$i];
			die;
		} else {
			$previous = $array[$i]; 
		}
	}
	echo  "false";	
}
echo firstNonRepeated('heloabcc');
