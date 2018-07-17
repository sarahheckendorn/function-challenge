<?php
//math function in PHP
function hardWare() {
	$hammer = 27;
	$nail = 13;
	$sum = $hammer + $nail;
	return $sum;

};

echo hardWare();

//strings function in PHP
function strings($berry, $cake, $frosting) {
	$total = $berry + $cake + $frosting;
	return "I am making a dessert. It will cost me: $total";

};

echo strings(17, 29, 10);

//array function in PHP

function triple($number) {
	return $number *= 3;
}

$numberArray = array(27, 32, 18, 24);
$newArray = array_map("triple", $numberArray);
print_r($newArray);
?>