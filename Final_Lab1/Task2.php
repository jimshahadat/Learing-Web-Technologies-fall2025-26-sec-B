<?php
// Define the amount
$amount = 100;  // Example value for the amount

// Define the VAT rate (15%)
$vatRate = 0.15;

// Calculate the VAT
$vat = $amount * $vatRate;

// Calculate the total amount including VAT
$totalAmount = $amount + $vat;

// Display the results
echo "Original Amount: " . $amount . " units<br>";
echo "VAT (15%): " . $vat . " units<br>";
echo "Total Amount (Including VAT): " . $totalAmount . " units<br>";
?>
