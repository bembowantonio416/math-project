<?php
// Problem 1: Sum of all natural numbers from 1 to N

function sumOfNaturalNumbers($n) {
    $result = 0;
    for ($i = 1; $i <= $n; $i++) {
        $result += $i;
    }
    return $result;
}

// Problem 2: Find the largest prime factor of a number

function findLargestPrimeFactor($number) {
    if ($number % 2 == 0) {
        return 2;
    } else {
        for ($i = 3; $i * $i <= $number; $i += 2) {
            while ($number % $i == 0) {
                $number /= $i;
            }
        }
        if ($number > 1) {
            return $number;
        } else {
            return -1;
        }
    }
}

// Problem 3: Check if a given year is a leap year

function checkLeapYear($year) {
    return $year % 4 === 0 && $year % 100 !== 0 || $year % 400 === 0 ? true : false;
}
