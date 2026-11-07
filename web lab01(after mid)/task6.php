<?php

$x = 5;
$y = 10;

function addition() {

    // Accessing global variables
    

    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];

}

addition();

// Display result

echo "Sum = " . $GLOBALS['z'];

?>