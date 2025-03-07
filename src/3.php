<?php
// Random mathematical problem
function getRandomProblem() {
    $numbers = range(0, 10);
    shuffle($numbers);
    $a = array_pop($numbers);
    $b = array_pop($numbers);
    return "$a + $b";
}

// Get a random problem and display it to the user
$problem = getRandomProblem();
echo "What is $problem?";

// Get the answer from the user
$answer = readline("> ");

// Check if the answer is correct
if ($answer == eval($problem)) {
    echo "Correct! You got it right.";
} else {
    echo "Incorrect. The answer was $answer.";
}