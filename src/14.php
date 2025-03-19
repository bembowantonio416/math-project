<?php
// Function to calculate the area of a rectangle
function getArea($length, $width) {
return $length * $width;
}

// Function to calculate the perimeter of a rectangle
function getPerimeter($length, $width) {
return 2 * ($length + $width);
}

// Driver code
$length = 5;
$width = 3;
echo "Area: " . getArea($length, $width) . "\n";
echo "Perimeter: " . getPerimeter($length, $width);
?>