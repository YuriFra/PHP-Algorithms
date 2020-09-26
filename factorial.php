<?php
//calculate factorial of a number
function factorial($num) {
    if ($num <= 1) {
        $result = 1;
    } else {
        $result = $num * factorial($num - 1);
    }
    return $result;
}
$output = factorial(5);
var_dump($output);
