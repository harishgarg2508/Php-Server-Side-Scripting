<!-- 
    types of arrays in php
there aret three types of array in phpindexed array
associative array =  An array which stored all type of data in specific format

multidimesional array

-->
<?php
$result = array(
    array("Manoj", 8.8, "pass"),
    array("Anuj", 9.9, "pass"),
    array("Aditya", 7.7, "pass"),
);

// Corrected echo statements with proper indices and closing quotes
echo $result[0][0] . " - CGPA is: " . $result[0][1] . " and his status is " . $result[0][2] . "<br>";
echo $result[1][0] . " - CGPA is: " . $result[1][1] . " and his status is " . $result[1][2] . "<br>";
echo $result[2][0] . " - CGPA is: " . $result[2][1] . " and his status is " . $result[2][2] . "<br>";
?>