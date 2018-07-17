function hardWare() { //naming my function
	let hammer = 27; //assigning numbers to my variables
	let nail = 13;
	let sum = hammer + nail; //assigning both variables to my sum variable
	return sum; //returning sum

};

console.log(hardWare()); //calling my function to display it's variables


function strings(berry, cake, frosting) { //naming my function and naming parameters
	let total = berry + cake + frosting; //assigning parameters to the total
	return "I am making a dessert. It will cost me: " + "$" + total ; //adding strings

};

console.log(strings(17, 29, 10)); // calling function and assigning numbers to my parameters

const numberArray =[27, 32, 18, 24]; // naming my function and assigning my array
const newArray = numberArray.map(number => number * 3); //using the map function to store information
	console.log(newArray); //logging the array to multiply the number parameters by 3



