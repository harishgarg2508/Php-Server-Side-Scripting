<?php

// Arithmetic Operators
$a = 10;
$b = 3;
echo "Arithmetic Operators:<br>";
echo "Addition: " . ($a + $b) . "<br>";        // 13
echo "Subtraction: " . ($a - $b) . "<br>";     // 7
echo "Multiplication: " . ($a * $b) . "<br>";  // 30
echo "Division: " . ($a / $b) . "<br>";        // 3.3333
echo "Modulus: " . ($a % $b) . "<br>";         // 1
echo "Exponentiation: " . ($a ** $b) . "<br>"; // 1000

// Assignment Operators
echo "<br>Assignment Operators:<br>";
$c = $a;  // 10
echo "c = a: " . $c . "<br>";
$c += $b; // 13
echo "c += b: " . $c . "<br>";
$c -= $b; // 10
echo "c -= b: " . $c . "<br>";
$c *= $b; // 30
echo "c *= b: " . $c . "<br>";
$c /= $b; // 10
echo "c /= b: " . $c . "<br>";
$c %= $b; // 1
echo "c %= b: " . $c . "<br>";

// Comparison Operators
echo "<br>Comparison Operators:<br>";
var_dump($a == $b);  // false
echo "<br>";
var_dump($a === $b); // false
echo "<br>";
var_dump($a != $b);  // true
echo "<br>";
var_dump($a !== $b); // true
echo "<br>";
var_dump($a < $b);   // false
echo "<br>";
var_dump($a > $b);   // true
echo "<br>";
var_dump($a <= $b);  // false
echo "<br>";
var_dump($a >= $b);  // true
echo "<br>";

// Logical Operators
echo "<br>Logical Operators:<br>";
var_dump($a == 10 && $b == 3); // true
echo "<br>";
var_dump($a == 10 || $b == 5); // true
echo "<br>";
var_dump(!$a);                 // false
echo "<br>";

// String Operators
echo "<br>String Operators:<br>";
$str1 = "Hello";
$str2 = "World";
echo "Concatenation: " . $str1 . " " . $str2 . "<br>"; // Hello World
$str1 .= " PHP";
echo "Concatenation assignment: " . $str1 . "<br>";    // Hello PHP

// Array Operators
echo "<br>Array Operators:<br>";
$array1 = array("a" => "apple", "b" => "banana");
$array2 = array("b" => "banana", "c" => "cherry");
print_r($array1 + $array2); // Union
echo "<br>";
var_dump($array1 == $array2);  // false
echo "<br>";
var_dump($array1 === $array2); // false
echo "<br>";
var_dump($array1 != $array2);  // true
echo "<br>";
var_dump($array1 !== $array2); // true
echo "<br>";

// Increment/Decrement Operators
echo "<br>Increment/Decrement Operators:<br>";
$x = 5;
echo "Pre-increment: " . ++$x . "<br>"; // 6
echo "Post-increment: " . $x++ . "<br>"; // 6
echo "After post-increment: " . $x . "<br>"; // 7
echo "Pre-decrement: " . --$x . "<br>"; // 6
echo "Post-decrement: " . $x-- . "<br>"; // 6
echo "After post-decrement: " . $x . "<br>"; // 5

?>
