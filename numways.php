<? 

// given a staircase of length n 
// and you can jump 1 2 or 3 steps 
// how many ways can you climb that staircase 

function num_ways($n) { 
    return num_ways($n-1) + num_ways($n-2);
}
// number of steps 
$n = 4;
echo num_ways($n);

// steps you can take 

// when you have three stairs, the solutions are basically 
// the same as climbing two stairs and one stair 
// so num_ways(n) = num_ways(n-1) + num_ways(n-2);

function num_ways2($n) { 
    $nums = [];
    $nums[0] = 1; $nums[1] = 1;
    for($i = 2; $i <= $n; $i++) { 
        $nums[$i] = $nums[$i -1] + $nums[$i -2];
    }
    return $nums[$n];
}

echo num_ways(4);