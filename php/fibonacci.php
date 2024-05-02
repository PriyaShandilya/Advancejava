<?php

// Function to generate Fibonacci series using recursion
function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

// Generate the first 20 Fibonacci numbers
$fibonacciSeries = [];
for ($i = 0; $i < 20; $i++) {
    $fibonacciSeries[] = fibonacci($i);
}

// Output the Fibonacci series
echo "First 20 Fibonacci numbers: <br>";
foreach ($fibonacciSeries as $number) {
    echo $number . ", ";
}
?>
