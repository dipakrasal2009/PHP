<?php
class Student {
    public $name;
    public $age;
    public $grade;

    public function displayInfo() {
        echo "Name: " . $this->name . "\n";
        echo "Age: " . $this->age . "\n";
        echo "Grade: " . $this->grade . "\n";
    }
}

$student = new Student();
$student->name = "Dipak Rasal";
$student->age = 21;
$student->grade = 10;
$student->displayInfo();
?>




















