<!-- <?php

$t =  date("g");

if($t>"7"){
    echo " have a good day";
}
else
{
    echo "Have a good night";
}


?> -->


<?php

$t = date("G"); // Get the current hour in 12-hour format (01 to 12)

if ($t < "12") { // Check if the hour is less than 7
    echo " have a good day"; // If true, print this message
} else {
    echo "Have a good night"; // If false, print this message
}

?>