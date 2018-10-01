<? 
function staircase($n) {  
	for ($i = 1; $i <= $n; $i++) { 
		$spaces = $n-$i;
		while ($spaces) { 
			echo " ";
			$spaces--;
		}
		$stairs = 1;
		while ($stairs <= $i) { 
			echo "#";
			$stairs++;
		}
		echo PHP_EOL;
	} 
}

echo staircase(8);
