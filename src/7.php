<?php
$math_problems = array(
    '2 + 2 =',
    '15 - 3 =',
    '7 x 2 ='
);
$random_problem = $math_problems[array_rand($math_problems)];
echo "$random_problem\n";
?>
