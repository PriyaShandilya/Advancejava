<?php

// Sample associative array
$array = array(
    "John" => 30,
    "Alex" => 25,
    "Emily" => 35,
    "David" => 20
);

// Custom sorting function
function sortArrayByValue($array) {
    // Sort the array by value while maintaining key-value association
    asort($array);
    return $array;
}

// Sorting the array
$sortedArray = sortArrayByValue($array);

// Displaying the sorted array
foreach($sortedArray as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
?>
