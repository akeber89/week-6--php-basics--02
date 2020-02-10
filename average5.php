<?php

declare(strict_types=1);

function average5 (int $number1, int $number2, int $number3, int $number4, int $number5) : float {
    return ($number1 + $number2 + $number3 + $number4 + $number5) / 5;
};


var_dump(average5(1, 2, 3, 4, 5)); // float(3)

// Create a function, average5, that takes five numbers as arguments. 
// The function should return the average of the numbers.
