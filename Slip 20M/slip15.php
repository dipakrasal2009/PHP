<?php

class MyClass {
    public $prop1;
    private $prop2;
    
    public function __construct($val1, $val2) {
        $this->prop1 = $val1;
        $this->prop2 = $val2;
    }
    
    public function myMethod() {
        echo "This is a method of MyClass\n";
    }
}

$obj = new MyClass(10, 20);

// Get object properties
$properties = get_object_vars($obj);
echo "Properties of MyClass object:\n";
foreach ($properties as $name => $value) {
    echo "$name: $value\n";
}

echo "\n";

// Get object methods
$methods = get_class_methods($obj);
echo "Methods of MyClass object:\n";
foreach ($methods as $method) {
    echo "$method\n";
}

echo "\n";

// Check if a property exists
$propertyExists = property_exists($obj, 'prop1');
echo "Does prop1 exist in MyClass object? ";
echo $propertyExists ? "Yes\n" : "No\n";

// Check if a method exists
$methodExists = method_exists($obj, 'myMethod');
echo "Does myMethod exist in MyClass object? ";
echo $methodExists ? "Yes\n" : "No\n";
?>