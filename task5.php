 <?php
/*
$x = 5;

// Function
function myFunction() {

    echo $x;

}

// Calling function
myFunction();

?>
<?php

function myFunction() {

    $x = 10;

    echo "Inside function: $x <br>";

}

myFunction();

// Trying to access local variable
echo "Outside function: $x";

*/?>

<?php

$x = 5;

function myFunction() {

    global $x;

    echo "Value of x is: $x";

}

myFunction();

?>