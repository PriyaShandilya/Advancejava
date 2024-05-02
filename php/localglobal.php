<?php

// Global variable
$globalVar = "I am a global variable.";

function testScope() {
    // Local variable
    $localVar = "I am a local variable.";

    // Static variable
    static $staticVar = "I am a static variable.";

    // Accessing global variable
    global $globalVar;

    echo "Inside function:<br>";
    echo "Local variable: $localVar<br>";
    echo "Global variable: $globalVar<br>";
    echo "Static variable: $staticVar<br>";

    // Modify static variable
    $staticVar .= " Modified.";
}

// Accessing global variable outside the function
echo "Outside function:<br>";
echo "Global variable: $globalVar<br>";

// Call the function
testScope();

// Accessing static variable outside the function
// This will show the modification made inside the function
echo "Outside function after function call:<br>";


?>
