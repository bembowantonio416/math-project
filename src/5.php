<?php
// Define an array of mathematical operators
$operators = ['+', '-', '*', '/'];

// Generate a random math problem
$problem = rand(1, 10) . " " . $operators[rand(0, 3)] . " " . rand(1, 10);

// Evaluate the problem and display the result
echo eval("return " . $problem . ";");
?>