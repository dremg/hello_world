/*
* Demonstrate working with JSON objects
*
*/

// Create a object of users that will contain userData
var users = {};  // Can consider using [] so a push() can be used to add users. Current a key is need for each user.


class User {
	constructor(firstName,lastName,phone,tosAgreement){
		let userId;  // Define the userId variable, it will be created outside of the constructor class

		// Prepare user data to be added to the users object
		var userData = {
			"userId" : userId,
			"firstName" : firstName,
			"lastName" : lastName,
			"phone" : phone,
			"tosAgreement" : tosAgreement
		};

		return userData;
	}	
}


function addUser(firstName,lastName,phone,tosAgreement){
	user = new User(firstName,lastName,phone,tosAgreement);
	user.userId = createNewId(5);

	return user;
}



function createNewId(idLength){
	// Create a random 5 digit Id
	id = "";
	possibleCharacters = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	for(i=0; i<idLength; i++){
		// Get a random character from the possibleCharacters string
		randomCharacter = possibleCharacters.charAt(Math.floor(Math.random() * possibleCharacters.length));

		// Concatenate the randomCharacter to the Id
		id += randomCharacter;
	}

	return id;
}


// Populate the users object
users['user1'] = addUser('Eric','Gamble','7045570042',true);
users['user2'] = addUser('Helena','Gamble','7045570041',true);
users['user3'] = addUser('Marcus','Gamble','7045570050',false);


// Print the JSON object
console.log(users);
