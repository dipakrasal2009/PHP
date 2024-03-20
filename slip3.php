<?php

// Define the Shape class
class Shape {
    // Define method to calculate area (to be overridden by subclasses)
    public function calculateArea() {
        return 0;
    }
}

// Define the Triangle class (subclass of Shape)
class Triangle extends Shape {
    private $base;
    private $height;

    // Constructor to initialize base and height of the triangle
    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    // Override the calculateArea method to calculate area of triangle
    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}

// Define the Square class (subclass of Shape)
class Square extends Shape {
    private $side;

    // Constructor to initialize side of the square
    public function __construct($side) {
        $this->side = $side;
    }

    // Override the calculateArea method to calculate area of square
    public function calculateArea() {
        return $this->side * $this->side;
    }
}

// Define the Rectangle class (subclass of Shape)
class Rectangle extends Shape {
    private $length;
    private $width;

    // Constructor to initialize length and width of the rectangle
    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    // Override the calculateArea method to calculate area of rectangle
    public function calculateArea() {
        return $this->length * $this->width;
    }
}

// Define the Circle class (subclass of Shape)
class Circle extends Shape {
    private $radius;

    // Constructor to initialize radius of the circle
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Override the calculateArea method to calculate area of circle
    public function calculateArea() {
        return M_PI * $this->radius * $this->radius;
    }
}


$shape = new Triangle(5, 10); // Sample base and height values

$shape = new Square(7); // Sample side value

$shape = new Rectangle(6, 9); // Sample length and width values

$shape = new Circle(4); // Sample radius value

    

echo "Area of : " . $shape->calculateArea();


?>

