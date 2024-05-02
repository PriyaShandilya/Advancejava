<?php

// Function to multiply two matrices
function multiplyMatrices($matrix1, $matrix2) {
    $result = array();
    
    // Check if the number of columns in matrix1 is equal to the number of rows in matrix2
    if (count($matrix1[0]) !== count($matrix2)) {
        return "Error: Number of columns in matrix1 must be equal to the number of rows in matrix2.";
    }
    
    $rows = count($matrix1);
    $cols = count($matrix2[0]);
    $common = count($matrix1[0]);
    
    // Perform matrix multiplication
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            $result[$i][$j] = 0;
            for ($k = 0; $k < $common; $k++) {
                $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
            }
        }
    }
    
    return $result;
}

// Example matrices
$matrix1 = array(
    array(1, 2, 3),
    array(4, 5, 6),
);

$matrix2 = array(
    array(7, 8),
    array(9, 10),
    array(11, 12),
);

// Compute the multiplication of matrices
$resultMatrix = multiplyMatrices($matrix1, $matrix2);

// Display the result
echo "Result Matrix:<br>";
foreach ($resultMatrix as $row) {
    foreach ($row as $cell) {
        echo $cell . " ";
    }
    echo "<br>";
}

?>
