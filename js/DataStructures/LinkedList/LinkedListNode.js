class LinkedListNode {
  constructor(value, previous = null) {
    this.value = value;
    this.previous = previous;
  }

  getValue() {
    return this.value.value;
  }
}



module.exports = LinkedListNode; 