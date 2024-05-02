<?php

function reverseAndSum($number) {
    // Convert the number to a string
    $numberString = (string)$number;
    
    // Reverse the string
    $reversedNumberString = strrev($numberString);
    
    // Convert the reversed string back to a number
    $reversedNumber = (int)$reversedNumberString;
    
    // Calculate the sum of the original number and the reversed number
    $sum = $number + $reversedNumber;
    
    // Return the reversed number and its sum
    return array(
        "reversed_number" => $reversedNumber,
        "sum" => $sum
    );
}

// Test the function
$number = 12345;
$result = reverseAndSum($number);

echo "Original Number: $number\n";
echo "Reversed Number: " . $result['reversed_number'] . "\n";
echo "Sum: " . $result['sum'] . "\n";
?>
