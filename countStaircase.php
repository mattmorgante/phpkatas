<? 

function countWays($n) {
    if ($n < 0) { 
        return 0;
    } elseif ($n == 0) { 
        return 1;
    } else {
        return countWays($n-1) + countWays($n-2) + countWays($n-3);
    }
}

echo countWays(6);