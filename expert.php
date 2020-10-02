<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// === Exercise 1 ===
echo "Exercise 1 starts here:";
// error: $x was undefined
// solution: put the $x as parameter
function new_exercise($x) {
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}
new_exercise(2);

// === Exercise 2 ===
// expected: monday // but array in php start with 0 index, so the first element is with index of 0;
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];
echo $monday;

new_exercise(3);


// === Exercise 3 ===
// error: string is double quoted,
// solution: if there is no variable among or inside the string make it single quotes;
$str = 'Debugged ! Also very fun';
echo substr($str, 0, 10);

new_exercise(4);

// === Exercise 4 ===
// error: the result of substr was not pushed to week
// solution: create new array and push it to that array
$week1 = array();
foreach($week as $day) {
    $day = substr($day, 0, strlen($day)-3);
    array_push($week1, $day);
}

print_r($week1);

new_exercise(5);

// === Exercise 5 ===
// expected: to display a-z, solution: break if it start getting "aa"
$arr = [];
for ($letter = 'a'; $letter <= 'z'; $letter++) {
    if ($letter === 'aa') {
        break;
    } else {
        array_push($arr, $letter);
    }
}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array





