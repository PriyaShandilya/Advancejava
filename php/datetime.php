<!DOCTYPE html>
<html>
<head>
    <title>Date and Time Functions</title>
</head>
<body>

<?php
// Get the current date and time
$currentDateTime = date("Y-m-d H:i:s");

// Display the current date and time
echo "Current Date and Time: " . $currentDateTime . "<br>";

// Get the current date
$currentDate = date("Y-m-d");

// Display the current date
echo "Current Date: " . $currentDate . "<br>";

// Get the current time
$currentTime = date("H:i:s");

// Display the current time
echo "Current Time: " . $currentTime . "<br>";

// Get the day of the week
$dayOfWeek = date("l");

// Display the day of the week
echo "Day of the Week: " . $dayOfWeek . "<br>";

// Get the timestamp for a specific date
$timestamp = strtotime("2024-05-02");

// Display the timestamp
echo "Timestamp for 2024-05-02: " . $timestamp . "<br>";

// Get the date for a specific timestamp
$dateFromTimestamp = date("Y-m-d", $timestamp);

// Display the date for the specific timestamp
echo "Date from Timestamp: " . $dateFromTimestamp . "<br>";

// Get the difference between two dates
$startDate = strtotime("2024-01-01");
$endDate = strtotime("2024-12-31");
$daysDifference = ceil(($endDate - $startDate) / (60 * 60 * 24));

// Display the difference between two dates
echo "Days difference between 2024-01-01 and 2024-12-31: " . $daysDifference . " days<br>";

?>

</body>
</html>
