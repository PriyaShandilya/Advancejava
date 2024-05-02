<?php
function reverseNumber($number) {
    $reversedNumber = 0;
    while ($number > 0) {
        $digit = $number % 10;
        $reversedNumber = $reversedNumber * 10 + $digit;
        $number = (int)($number / 10);
    }
    return $reversedNumber;
}

function calculateSum($number) {
    $sum = 0;
    while ($number > 0) {
        $sum += $number % 10;
        $number = (int)($number / 10);
    }
    return $sum;
}

$number = 12345; // Change this to any number you want to reverse and calculate its sum
$reversed = reverseNumber($number);
$sum = calculateSum($number);

echo "Original Number: $number <br>";
echo "Reversed Number: $reversed <br>";
echo "Sum of digits: $sum";
?>

