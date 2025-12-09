<?php
// Define three numbers
$num1 = 10;  // Example number 1
$num2 = 25;  // Example number 2
$num3 = 15;  // Example number 3

// Compare the three numbers to find the largest
if ($num1 >= $num2 && $num1 >= $num3) {
    // If num1 is greater than or equal to both num2 and num3, it's the largest
    echo $num1 . " is the largest number.";
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    // If num2 is greater than or equal to both num1 and num3, it's the largest
    echo $num2 . " is the largest number.";
} else {
    // If num3 is greater than or equal to both num1 and num2, it's the largest
    echo $num3 . " is the largest number.";
}
?>
