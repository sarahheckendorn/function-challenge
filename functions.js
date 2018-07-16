function hardWare() {
	let hammer = 27;
	let nail = 13;
	let sum = hammer + nail;
	return sum;

};

console.log(hardWare());


function strings(berry, cake, frosting) {
	let total = berry + cake + frosting;
	return "I am making a dessert. It wil cost me: " + "$" + total ;

};

console.log(strings(17, 29, 10));

const dogs = ["labrador", "Poodle", "Hot Dog"];
const dogsToEat =[];

function delicious() {
	for(let i = 0; i < dogs.length; i++) {
		if(dogs[i] === "Hot Dog") {
			dogsToEat.push(dogs[i]);
		}
	}
	return dogsToEat;
};

console.log(delicious());

