<?php

$array= [
    [1,2,3,'A'],
    [1,2,'B','C'],
    [1,'D','E','F']
];
echo "The Array to Declare:<br>";

for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
        echo $array[$i][$j] . " ";
    }
    echo "<br> <br>";
}

echo "The Array to Print:<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3 - $i; $j++) {
        echo $array[$i][$j] . " ";
    }
    echo "<br> <br>";
}

echo "second one <br> <br>";

for ($i = 0; $i < 3; $i++) {
    for ($j = 3 - $i; $j < 4; $j++) {
        echo $array[$i][$j] . " ";
    }
    echo "<br> <br>";
}
?>