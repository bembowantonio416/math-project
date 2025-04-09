<?php
// Load the Math class from the MathProject package
require_once 'Math/Class/Math.php';

// Create an instance of the Math class
$math = new Math();

// Example: Add two numbers
echo "The sum is: " . $math->add(3, 5) . "\n";

// Example: Calculate the factorial of a number
echo "Factorial of 4! : " . $math->factorial(4) . "\n";
?>
