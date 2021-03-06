<?php
class Rectangle {
	// Properties for rectangle
	protected $name;
	protected $length 	= 0;
	protected $width	= 0; 

	// Method for rectangle
	public function getArea() {
		return ($this->length * $this->width);
	}

	public function getPerimeter() {
		return (2 * ($this->length + $this->width));
	}

	public function getRectangleName() {
		return $this->name;
	}

	public function setLength($length){
		$this->length 	= $length;
	}

	public function setRectangleName($name){
		$this->name 	= $name;
	}

	public function setWidth($width){
		$this->width 	= $width;
	}
}
?>

<?php

$rectangle1 	= new Rectangle;
$rectangle2		= new Rectangle;

$rectangle1->setRectangleName('Rectangle #1');
$rectangle1->setLength(32);
$rectangle1->setWidth(24);
echo "Characteristic of Rectangle: ". $rectangle1->getRectangleName() . "\n";
echo "Perimeter: " . $rectangle1->getPerimeter(). "\n";
echo "Area: " . $rectangle1->getarea(). "\n";
echo "\n\n";


$rectangle2->setRectangleName('Rectangle #2');
$rectangle2->setLength(32);
$rectangle2->setWidth(40);
echo "Characteristic of Rectangle: ". $rectangle2->getRectangleName() . "\n";
echo "Perimeter: " . $rectangle2->getPerimeter(). "\n";
echo "Area: " . $rectangle2->getarea(). "\n";
echo "\n\n";