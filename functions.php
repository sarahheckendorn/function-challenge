<?php
//math function in PHP
function hardWare() { //naming my function
	$hammer = 27; //assigning numerals to my variables
	$nail = 13;
	$sum = $hammer + $nail; //telling the sum to equal the numerals of my variables combined
	return $sum; //returning my sum

};

echo hardWare(); //calling the function to produce the number

//strings function in PHP
function strings($berry, $cake, $frosting) { //naming our function and putting in our parameters
	$total = $berry + $cake + $frosting; //asking to total the number of the parameters
	return "I am making a dessert. It will cost me: $total";//giving my return function a string

};

echo strings(17, 29, 10); //echoing my function to do it's job and assigning numbers to the parameters

//array function in PHP

function triple($number) { //declaring function with name, gave parameters
	return $number *= 3; //declaring that we are multiplying the numbers by 3
}

$numberArray = array(27, 32, 18, 24); //naming our array and setting the parameter
$newArray = array_map("triple", $numberArray); //using the map function to call our array
print_r($newArray); //used to run our script and display it
?>