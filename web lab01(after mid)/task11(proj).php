<!DOCTYPE html>
<html>
<head>

    <title>Student Information Page</title>

    <style>

        body {
            font-family: Arial;
            background-color: lightgray;
            text-align: center;
        }

        .container {
            background-color: white;
            width: 400px;
           
            padding: 20px;
            border-radius: 10px;
        }

        h1 {
            color: black;
        }

    </style>

</head>

<body>

<div class="container">

    <h1>Student Result</h1>

    <?php

    // Student information

    $name = "Mohsin Khan";
    $rollNo = "70172860";

    // Subject marks

    $subject1 = 80;
    $subject2 = 75;
    $subject3 = 90;

    // Pass marks

    $passMark = 50;

    // Calculate total marks

    $total = $subject1 + $subject2 + $subject3;

    // Calculate average

    $average = $total / 3;

    // Calculate percentage

    $percentage = ($total / 300) * 100;

    // Target percentage

    $target = 81.67;

    // Function with static counter

    function displayResult($title, $value) {

        static $count = 0;

        $count++;

        echo "<p>Result $count: $title = $value</p>";

    }

    // Display student information

    echo "<h2>Student Details</h2>";

    echo "Name: $name <br>";

    echo "Roll Number: $rollNo <br>";

    // Display subject marks

    echo "<h2>Subject Marks</h2>";

    echo "Subject 1: $subject1 <br>";

    echo "Subject 2: $subject2 <br>";

    echo "Subject 3: $subject3 <br>";

    // Display calculated results

    echo "<h2>Final Result</h2>";

    displayResult("Total Marks", $total);

    displayResult("Average", round($average, 2));

    displayResult("Percentage", round($percentage, 2) . "%");

    // Check pass or fail

    if (
        $subject1 >= $passMark &&
        $subject2 >= $passMark &&
        $subject3 >= $passMark
    ) {

        echo "<h3>Result: PASS</h3>";

    } else {

        echo "<h3>Result: FAIL</h3>";

    }

    // Check target percentage using ==

    if (round($percentage, 2) == $target) {

        echo "Target percentage achieved!";

    } else {

        echo "Target percentage not achieved.";

    }

    ?>

</div>

</body>
</html>