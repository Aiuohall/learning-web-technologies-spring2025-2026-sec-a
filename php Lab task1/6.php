<?php
$number = [1,26,17,47,90,65,5,07,78,99,34,87,56,23,45,67,89,12,34,56];
$search= 90;
$found = false;
foreach ($number as $num) {
    if ($num == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "The number {$search} is found in the array.";
} else {
    echo "The number {$search} is not found in the array.";
}