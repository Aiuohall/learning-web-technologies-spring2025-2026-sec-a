<?php
$ammount = 100;
$interest_rate = 0.15;

$vat =  $ammount * $interest_rate;
$total_ammount = $ammount + $vat;

echo "The total ammount is: {$total_ammount} <br>";
echo "the vat is : {$vat} <br>";
echo "Ammount after adding vat is : {$total_ammount} <br>";
?>