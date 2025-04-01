<?php
function calculateSum($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

$studentScores = [85, 92, 76, 88];
echo "The sum of the student scores is: " . calculateSum($studentScores);
