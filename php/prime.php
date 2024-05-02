<?php

// Function to check if a number is prime
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

// Generate the list of the first 20 prime numbers
$primeNumbers = [];
$count = 0;
$i = 2;
while ($count < 20) {
    if (isPrime($i)) {
        $primeNumbers[] = $i;
        $count++;
    }
    $i++;
}

// Output the list of prime numbers
echo "First 20 prime numbers: <br>";
foreach ($primeNumbers as $prime) {
    echo $prime . ", ";
}
?>
