<?php

$number = 25;

// Checking between 10 and 50

if ($number >= 10 && $number <= 50) {

    echo "Number is between 10 and 50 <br>";

}

// Checking outside the range

if ($number < 10 || $number > 50) {

    echo "Number is outside the range <br>";

}

// Using NOT operator

if (!($number >= 10 && $number <= 50)) {

    echo "Number is outside the range";

}

?>