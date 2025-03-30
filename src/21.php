<?php
// This PHP script is designed to be used with Math Project's exercises.
// Please make sure to have Math Project installed before running this script.

// Example: Find the sum of all numbers from 1 to 10
function calculateSum() {
    $total = 0;
    for ($i = 1; $i <= 10; $i++) {
        $total += $i;
    }
    return $total;
}

// Call the function and print the result
echo "The sum of all numbers from 1 to 10 is: " . calculateSum();
?>
