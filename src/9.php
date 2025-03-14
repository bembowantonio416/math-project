<?php

function getRandomMathProblem() {
    $operators = array("+", "-", "*", "/");
    $numbers = array(rand(1, 20), rand(1, 20));
    shuffle($numbers);
    $operator = $operators[array_rand($operators)];
    $result = eval("return {$numbers[0]} $operator {$numbers[1]};");
    return array($numbers[0], $operator, $numbers[1], $result);
}

?>
