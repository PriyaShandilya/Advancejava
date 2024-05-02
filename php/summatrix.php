<?php

function addMatrices($matrix1, $matrix2) {
    $rows = count($matrix1);
    $cols = count($matrix1[0]);

    // Check if the dimensions of the matrices are the same
    if (count($matrix2) != $rows || count($matrix2[0]) != $cols) {
        return "Matrices must have the same dimensions for addition.";
    }

    $result = [];

    // Iterate through each element and add corresponding elements
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            $result[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
        }
    }

    return $result;
}

// Example matrices
$matrix1 = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$matrix2 = [
    [9, 8, 7],
    [6, 5, 4],
    [3, 2, 1]
];

// Compute addition of matrices
$result = addMatrices($matrix1, $matrix2);

// Display result
echo "Matrix 1:\n";
displayMatrix($matrix1);
echo "\nMatrix 2:\n";
displayMatrix($matrix2);
echo "\nResultant Matrix:\n";
displayMatrix($result);

// Function to display matrix
function displayMatrix($matrix) {
    foreach ($matrix as $row) {
        echo implode(" ", $row) . "\n";
    }
}
?>
