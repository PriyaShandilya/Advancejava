<?php

// Sample associative array
$array = array(
    "John" => 30,
    "Alex" => 25,
    "Emily" => 35,
    "David" => 20
);

// Custom sorting function
function sortArrayByDescendingKey($array) {
    // Sort the array by key in descending order
    krsort($array);
    return $array;
}

// Sorting the array
$sortedArray = sortArrayByDescendingKey($array);

// Displaying the sorted array
foreach($sortedArray as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
?>
