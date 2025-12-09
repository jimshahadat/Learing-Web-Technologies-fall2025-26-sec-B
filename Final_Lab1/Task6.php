<?php
// Define an array
$numbers = [5, 12, 8, 20, 15, 3, 7, 18];

// Define the element to search for
$searchElement = 15;  // Example element to search

// Flag to indicate if the element is found
$isFound = false;

// Loop through the array to search for the element
for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] == $searchElement) {
        // Element found
        $isFound = true;
        echo "Element " . $searchElement . " found at index " . $i . ".<br>";
        break;  // Exit the loop once the element is found
    }
}

// If the element is not found
if (!$isFound) {
    echo "Element " . $searchElement . " not found in the array.<br>";
}
?>
