<?php

// Creating a multidimensional array using =>
$students = array(
    array(
        "name" => "Harish", 
        "age" => 20, 
        "gender" => "Male"
    ),
    array(
        "name" => "Garg", 
        "age" => 22, 
        "gender" => "Female"
    ),
    array(
        "name" => "lsjddlkdslkj", 
        "age" => 19, 
        "gender" => "Male"
    )
);

// Printing the array outputs
foreach ($students as $student) {
    echo "Name: " . $student['name'] . "<br>";
    echo "Age: " . $student['age'] . "<br>";
    echo "Gender: " . $student['gender'] . "<br><br>";
}
?>


