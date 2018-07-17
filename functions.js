function hardWare() {
	let hammer = 27;
	let nail = 13;
	let sum = hammer + nail;
	return sum;

};

console.log(hardWare());


function strings(berry, cake, frosting) {
	let total = berry + cake + frosting;
	return "I am making a dessert. It will cost me: " + "$" + total ;

};

console.log(strings(17, 29, 10));

const numberArray =[27, 32, 18, 24];
const newArray = numberArray.map(number => number * 3);
	console.log(newArray);



