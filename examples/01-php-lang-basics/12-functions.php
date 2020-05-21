<?php

// function 
function  sum($x, $y){
    return $x + $y;
}

// function call
echo sum(100, 344);


// Type hinting and return types
function muilty(int $x, int $y): int {
    return $x * $y;
}

echo "<br \>";

echo muilty(4, 5);