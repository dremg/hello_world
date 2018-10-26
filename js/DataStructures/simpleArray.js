/*
 * A simple illustration of array usage
 *	- creating an array,
 *	- moving through an array,
 *	- adding to an array,
 *	- removing from an array,
 *	- sorting an array,
 *	- working with array values:
 *		o min, max, range, count, sum, mean
 *
*/

var scores = []; // creates an empty array
const maxArraySize = 5; // sets the maximum size for the score array


// Add 5 test scores to the array, two (2) by non-iterative directive and three (3) by iterative directive


// Two (2) elements added the the score array in a non-iterative manner
scores[0] = 84;
scores[1] = 89;
var remainingScores = [91,79,96]; // scores to fill-up the scores array


// Three elements added to the score array in an iterative manner
currArraySize = scores.length;
for(i=currArraySize; i<maxArraySize; i++){
	// Get the score from the remainingScores array, offset by -2 because of two (2) scores initially placed
	// in the scores[].
	scores[i] = remainingScores[i-2]; 
}
console.log('Scores: ' +scores);  // Expected: [ 84, 89, 91, 79, 96 ]



// Sort the scores array, ascending
scores.sort();
console.log('Scores (ascending): ' +scores);    // Expected: [ 79, 84, 89, 91, 96 ]


// Sort the scores array, decending
scores.reverse();
console.log('Scores (decending): ' +scores);    // Expected: [ 96, 91, 89, 84, 79 ]


// Get the min, max, range, count, sum, and mean of the array
workWithArray();


// Change the 3rd test score to a 67 and show the results
scores[3-1] = 67;
workWithArray();


// Remove the last element of the array
scores.pop();
workWithArray();


// Remove the first element of the array
scores.shift();
workWithArray();

// Remove element in the 2nd position
delete scores[2-1];
workWithArray();

// Add scores 83,88,98 to the array
scores.push(83,88,98);
workWithArray();
	

function workWithArray(){
	// show the scores array
	console.log(' ');  // New line between logouts
	console.log(scores);

	// Get the min, max, sum, range, count, mean of the scores array, without using a built-in  min(), max(), mean() function
	let min=scores[0], max=0, sum=0, sum2=0, range=0, mean=0;
	for(i=0; i<=scores.length; i++)  {
		min = (scores[i]<min) ? scores[i] : min;
		max = (scores[i]>max) ? scores[i] : max;
		sum += (!isNaN(parseFloat(scores[i]))) ? parseFloat(scores[i]) : 0; // Check if number then add to sum
	}
	sum2 = scores.reduce(function(acc,val){ return acc + val; }, 0);  // Iterates thru the array to sum the values w/o value checking
	range = max - min;
	count = scores.length;
	mean = sum / count;
	console.log(`min: ` +min+
		`   max: ` +max+
		`   sum: ` +sum+
		`   sum2: ` +sum2+
		`   range: ` +range+
		`   count: ` +count+
		`   mean: ` +mean);
}