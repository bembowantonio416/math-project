<?php
// Problem 1: Calculate the sum of two numbers

function addNumbers($num1, $num2) {
    return $num1 + $num2;
}

$sum = addNumbers(5, 3);
echo "The sum is: " . $sum;

// Problem 2: Find the largest number in an array

$array = [7, 9, 2, 4, 6];
$largestNumber = max($array);
echo "The largest number in the array is: " . $largestNumber;

// Problem 3: Sort an array of numbers in ascending order

$numbers = [10, 5, 8, 7, 3];
sort($numbers);
echo "Sorted numbers in ascending order are: " . implode(", ", $numbers);

// Problem 4: Calculate the average of a list of numbers

$squares = [2, 3, 4, 5, 6];
$average = array_sum($squares) / count($squares);
echo "The average is: " . $average;

// Problem 5: Sort an array of numbers in descending order

sortColors([10, 7, 5, 3]);
