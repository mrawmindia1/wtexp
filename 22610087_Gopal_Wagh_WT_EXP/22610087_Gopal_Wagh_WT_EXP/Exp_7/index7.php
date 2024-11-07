<!-- Experiment 7 -->
<!-- program on php controle statements -->

<?php
// Function to demonstrate if-else statement
function checkEvenOdd($number) {
    if ($number % 2 == 0) {
        return "$number is even.";
    } else {
        return "$number is odd.";
    }
}

// Function to demonstrate switch statement
function getGrade($score) {
    switch (true) {
        case $score >= 90:
            return "Grade: A";
        case $score >= 80:
            return "Grade: B";
        case $score >= 70:
            return "Grade: C";
        case $score >= 60:
            return "Grade: D";
        default:
            return "Grade: F";
    }
}

// Function to demonstrate for loop
function printNumbers($limit) {
    echo "Numbers from 1 to $limit:\n";
    for ($i = 1; $i <= $limit; $i++) {
        echo $i . "\n";
    }
}

// Testing the functions
$number = 5;
echo checkEvenOdd($number) . "\n";

$score = 85;
echo getGrade($score) . "\n";

$limit = 10;
printNumbers($limit);
?>
