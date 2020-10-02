<?php
declare(strict_types=1);

// === Exercise 1 ===

echo "Exercise 1 starts here:";
// error: $x was undefined and new_exercise function was not used/or called
// solution: put the $x as parameter, and call the function with argument;
function new_exercise($x) {
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}
new_exercise(5);


