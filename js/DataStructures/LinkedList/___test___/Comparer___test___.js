const Comparer = require('../comparer');

var comparer = new Comparer();

var equal_1 = comparer.equal(0,0) ? true : false ;
var equal_2 = comparer.equal(0,1) ? true : false;
var equal_3 = comparer.equal('a','a') ? true : false;
var equal_4 = comparer.equal('a','b') ? true : false;
var equal_5 = comparer.equal(0,'0') ? true : false;

console.log('equal_1: ' +equal_1);
console.log('equal_2: ' +equal_2);
console.log('equal_3: ' +equal_3);
console.log('equal_4: ' +equal_4);
console.log('equal_5: ' +equal_5);



var lessThan_1 = comparer.lessThan(0,0) ? true : false ;
var lessThan_2 = comparer.lessThan(0,1) ? true : false;
var lessThan_3 = comparer.lessThan('a','a') ? true : false;
var lessThan_4 = comparer.lessThan('a','b') ? true : false;
var lessThan_5 = comparer.lessThan(0,'0') ? true : false;

console.log('lessThan_1: ' +lessThan_1);
console.log('lessThan_2: ' +lessThan_2);
console.log('lessThan_3: ' +lessThan_3);
console.log('lessThan_4: ' +lessThan_4);
console.log('lessThan_5: ' +lessThan_5);



var greaterThan_1 = comparer.greaterThan(1,0) ? true : false ;
var greaterThan_2 = comparer.greaterThan(0,1) ? true : false;
var greaterThan_3 = comparer.greaterThan('a','a') ? true : false;
var greaterThan_4 = comparer.greaterThan('b','a') ? true : false;
var greaterThan_5 = comparer.greaterThan(0,'0') ? true : false;

console.log('greaterThan_1: ' +greaterThan_1);
console.log('greaterThan_2: ' +greaterThan_2);
console.log('greaterThan_3: ' +greaterThan_3);
console.log('greaterThan_4: ' +greaterThan_4);
console.log('greaterThan_5: ' +greaterThan_5);


var lessThanOrEqual_1 = comparer.lessThanOrEqual(0,0) ? true : false ;
var lessThanOrEqual_2 = comparer.lessThanOrEqual(0,1) ? true : false;
var lessThanOrEqual_3 = comparer.lessThanOrEqual('a','a') ? true : false;
var lessThanOrEqual_4 = comparer.lessThanOrEqual('a','b') ? true : false;
var lessThanOrEqual_5 = comparer.lessThanOrEqual(0,'0') ? true : false;

console.log('lessThanOrEqual_1: ' +lessThanOrEqual_1);
console.log('lessThanOrEqual_2: ' +lessThanOrEqual_2);
console.log('lessThanOrEqual_3: ' +lessThanOrEqual_3);
console.log('lessThanOrEqual_4: ' +lessThanOrEqual_4);
console.log('lessThanOrEqual_5: ' +lessThanOrEqual_5);



var greaterThanOrEqual_1 = comparer.greaterThanOrEqual(1,0) ? true : false ;
var greaterThanOrEqual_2 = comparer.greaterThanOrEqual(0,1) ? true : false;
var greaterThanOrEqual_3 = comparer.greaterThanOrEqual('a','a') ? true : false;
var greaterThanOrEqual_4 = comparer.greaterThanOrEqual('b','a') ? true : false;
var greaterThanOrEqual_5 = comparer.greaterThanOrEqual(0,'0') ? true : false;

console.log('greaterThanOrEqual_1: ' +greaterThanOrEqual_1);
console.log('greaterThanOrEqual_2: ' +greaterThanOrEqual_2);
console.log('greaterThanOrEqual_3: ' +greaterThanOrEqual_3);
console.log('greaterThanOrEqual_4: ' +greaterThanOrEqual_4);
console.log('greaterThanOrEqual_5: ' +greaterThanOrEqual_5);