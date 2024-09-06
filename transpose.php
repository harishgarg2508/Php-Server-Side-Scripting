<html>
    <body>
        <?php
        // Initialize a matrix 'a'
        $a = array(
            array(1, 2, 3),
            array(4, 5, 6),
            array(7, 8, 9)
        );

        // Calculate the number of rows and columns in the matrix
        $numRows = count($a);    // Number of rows
        $numCols = count($a[0]); // Number of columns

        // Declare array 't' for the transpose with reversed dimensions and initialize with 0
        $t = array();
        for ($i = 0; $i < $numCols; $i++) {
            for ($j = 0; $j < $numRows; $j++) {
                $t[$i][$j] = 0;
            }
        }

        // Calculate transpose of the matrix
        for ($i = 0; $i < $numRows; $i++) {
            for ($j = 0; $j < $numCols; $j++) {
                $t[$j][$i] = $a[$i][$j];
            }
        }

        // Print original matrix
        echo "<h3>Original Matrix:</h3>";
        for ($i = 0; $i < $numRows; $i++) {
            for ($j = 0; $j < $numCols; $j++) {
                echo $a[$i][$j] . " ";
            }
            echo "<br>";
        }

        // Print transposed matrix
        echo "<h3>Transposed Matrix:</h3>";
        for ($i = 0; $i < $numCols; $i++) {
            for ($j = 0; $j < $numRows; $j++) {
                echo $t[$i][$j] . " ";
            }
            echo "<br>";
        }
        ?>
    </body>
</html>
