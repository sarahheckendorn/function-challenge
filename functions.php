<?php
function hardWare() {
	$hammer = 27;
	$nail = 13;
	$sum = $hammer + $nail;
	return $sum;

};

echo hardWare();


function strings($berry, $cake, $frosting) {
	$total = $berry + $cake + $frosting;
	return "I am making a dessert. It will cost me: $total";

};

echo strings(17, 29, 10);

$dogs = array("labrador", "Poodle", "Hot Dog");
$dogsToEat = array();

function delicious() {
	for($i = 0; $i < 3; $i++) {
		if ($i === in_array("Hot Dog, $dogs)) {
			array_push($dogsToEat, $dogs[$x]);
		}
	}
	var_dump $dogsToEat;
	
};




?>