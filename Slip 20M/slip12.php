<?php

// Define the Shape interface
interface Shape {
    public function area();
    public function volume();
}

// Define a constant PI
define('PI', 3.14159);

// Implement the Shape interface in the Cylinder class
class Cylinder implements Shape {
    private $radius;
    private $height;

    // Constructor to initialize radius and height of the cylinder
    public function __construct($radius, $height) {
        $this->radius = $radius;
        $this->height = $height;
    }

    // Calculate the surface area of the cylinder
    public function area() {
        return 2 * PI * $this->radius * ($this->radius + $this->height);
    }

    // Calculate the volume of the cylinder
    public function volume() {
        return PI * $this->radius * $this->radius * $this->height;
    }
}

// Create a cylinder object
$cylinder = new Cylinder(3, 5);

// Calculate and print the area and volume of the cylinder
echo "Area of the cylinder: " . $cylinder->area() . " square units\n";
echo "Volume of the cylinder: " . $cylinder->volume() . " cubic units\n";
?>

