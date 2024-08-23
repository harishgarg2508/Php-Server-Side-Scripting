<?php
// Defining variables
$name = "Alice";
$age = 25;
$height = 5.7;
$isStudent = true;
$colors = array("red", "green", "blue");

// Printing variables
echo "Name: " . $name . "<br>"; // Concatenating strings with variables
echo "Age: " . $age . "<br>";
echo "Height: " . $height . " feet<br>";
echo "Is Student: " . ($isStudent ? "Yes" : "No") . "<br>"; // Ternary operator for boolean
echo "Favorite Colors: " . implode(", ", $colors) . "<br>"; // Joining array elements into a string
?>