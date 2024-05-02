<?php

// Define a function to handle division
function divide($numerator, $denominator) {
    if ($denominator == 0) {
        throw new Exception("Division by zero error");
    }
    return $numerator / $denominator;
}

// Example usage
try {
    $result = divide(10, 0);
    echo "Result: " . $result;
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage();
}

?>
