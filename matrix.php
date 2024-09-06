<?php

function multiply(&$mat1, &$mat2, &$res) {
    $N = 4; // Size of the matrix
    for ($i = 0; $i < $N; $i++) {
        for ($j = 0; $j < $N; $j++) {
            $res[$i][$j] = 0; // Initialize the result cell
            for ($k = 0; $k < $N; $k++) {
                $res[$i][$j] += $mat1[$i][$k] * $mat2[$k][$j]; // Matrix multiplication logic
            }
        }
    }
}

// Initialize 4x4 matrices
$mat1 = array(
    array(1, 2, 3, 4),
    array(5, 6, 7, 8),
    array(9, 10, 11, 12),
    array(13, 14, 15, 16)
);

$mat2 = array(
    array(1, 0, 0, 0),
    array(0, 1, 0, 0),
    array(0, 0, 1, 0),
    array(0, 0, 0, 1)
);

$res = array(
    array(0, 0, 0, 0),
    array(0, 0, 0, 0),
    array(0, 0, 0, 0),
    array(0, 0, 0, 0)
);

// Call the function to perform matrix multiplication
multiply($mat1, $mat2, $res);

// Output the result in matrix form
echo "Result matrix is:<br>";
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        echo $res[$i][$j] . " "; // Print the value in the matrix with a space
    }
    echo "<br>"; // Newline after each row
}

?>
