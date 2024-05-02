<?php

// Function to calculate factorial of a number
function factorial($number) {
    if ($number < 0) {
        return "Factorial is not defined for negative numbers.";
    } elseif ($number == 0 || $number == 1) {
        return 1;
    } else {
        $result = 1;
        for ($i = 2; $i <= $number; $i++) {
            $result *= $i;
        }
        return $result;
    }
}

// Example usage
$givenNumber = 5; // Change this number as per your requirement

// Calculate factorial of the given number
$factorial = factorial($givenNumber);

// Output the result
echo "Factorial of $givenNumber is: $factorial";
?>
