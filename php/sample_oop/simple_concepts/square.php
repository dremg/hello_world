<?php
// Include class definition
include "rectangle.php";


// Define the Square class
class Square extends Rectangle {
	// Additional properties for squares
	public $color;

	// Method to test if the shape is square
	public function isSquare() {
		if ($this->length == $this->width){
			return true;	// Square
		} else {
			return false;	// Not a square
		}
	}
}

?>

<?php  
$square1 	= new Square;


$square1->setName('Square #1');
$square1->setLength(40);
$square1->setWidth(40);
echo "Characteristic of Square: ". $square1->getName() . "\n";
echo "Perimeter: " . $square1->getPerimeter(). "\n";
echo "Area: " . $square1->getarea(). "\n";
echo "isSquare: " . $square1->isSquare(). "\n";
echo "\n\n";

var_dump($square1);

?>
