<? 

function convertSeconds($seconds) { 
    $days = $hours = $minutes = 0;
    while ($seconds >= 86400) { 
        $days ++;
        $seconds = $seconds - 86400;
    }
    while ($seconds >= 3600) { 
        $hours++;
        $seconds = $seconds - 3600;
    }
    while ($seconds >= 60) { 
        $minutes++;
        $seconds = $seconds - 60;
    }
    return $days ." days, " . $hours . " hours, " . $minutes . " minutes, and " . $seconds . " seconds.";
}
$seconds = 7322;   
echo convertSeconds($seconds) . PHP_EOL;