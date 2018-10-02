<? 
function staircase($n) {  
	for ($i = 1; $i <= $n; $i++) { 
		$spaces = $n-$i;
		$output = "";
		while ($spaces) { 
			$output .= " ";
			$spaces--;
		}
		$stairs = 1;
		while ($stairs <= $i) { 
			$output .= "#";
			$stairs++;
		}
		echo $output . PHP_EOL;
	} 
}

echo staircase(8);