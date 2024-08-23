<?php
// Scalar Types
$intVar = 42; // Integer
$floatVar = 3.14; // Float
$stringVar = "Hello, World!"; // String
$boolVar = true; // Boolean

// Compound Types
$arrayVar = array("apple", "banana", "cherry"); // Array

class Car {
    public $color;
    public function __construct($color) {
        $this->color = $color;
    }
}
$objectVar = new Car("red"); // Object

// Special Types
$nullVar = null; // NULL
$file = fopen("example.txt", "r"); // Resource

// Output each variable
echo "Integer: " . $intVar . "<br>";
echo "Float: " . $floatVar . "<br>";
echo "String: " . $stringVar . "<br>";
echo "Boolean: " . ($boolVar ? "true" : "false") . "<br>";
echo "Array: " . implode(", ", $arrayVar) . "<br>";
echo "Object: Car color is " . $objectVar->color . "<br>";
echo "NULL: " . var_export($nullVar, true) . "<br>";
echo "Resource: " . get_resource_type($file) . "<br>";

// Close the resource
fclose($file);
?>