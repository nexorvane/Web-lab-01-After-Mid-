<?php

function counter() {

    static $count = 0;

    $count++;

    echo "Count = $count <br>";

}

// Calling function five times

counter();
counter();
counter();
counter();
counter();

?>