/*
*	Test the LinkedListNode code
*
*/

LinkedListNode = require('../LinkedListNode');

// Create a new LinkedListNode
var node = new LinkedListNode(1);
console.log(node); //  LinkedListNode { value: 1, next: null }

// Place data into the node variable (again)
var nodeValue = {'key' : 'test_1', 'value' : 13};
node = new LinkedListNode(nodeValue);
console.log(node); //  LinkedListNode { value: { key: 'test_1', value: 13 }, next: null }


// Place data into a new node (node2)
nodeValue = {'key' : 'test_2', 'value' : 1};
node2 = new LinkedListNode(nodeValue,node.value.value);
console.log(node2);


// Get the values for the created nodes
console.log(node.getValue());  //  13
console.log(node2.getValue());  //  1
