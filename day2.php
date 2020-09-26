<?php
declare(strict_types=1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$intCode = [
    1,0,0,3,1,1,2,3,1,3,4,3,1,5,0,3,2,6,1,19,1,5,19,23,2,9,23,27,1,6,27,31,1,31,9,35,2,35,10,39,1,5,39,43,2,43,9,47,1,5,47,51,1,51,5,55,1,55,9,59,2,59,13,63,1,63,9,67,1,9,67,71,2,71,10,75,1,75,6,79,2,10,79,83,1,5,83,87,2,87,10,91,1,91,5,95,1,6,95,99,2,99,13,103,1,103,6,107,1,107,5,111,2,6,111,115,1,115,13,119,1,119,2,123,1,5,123,0,99,2,0,14,0
];

function calcInput($input, $noun, $verb) {
    $input[1] = $noun;
    $input[2] = $verb;
    for ($i = 0, $iMax = count($input); $i < $iMax; $i += 4) {
        if ($input[$i] === 99) {
            return $input;
        }
        switch ($input[$i]) {
            case 1:
                $result = $input[$input[$i + 1]] + $input[$input[$i + 2]];
                $input[$input[$i + 3]] = $result;
                break;
            case 2:
                $result = $input[$input[$i + 1]] * $input[$input[$i + 2]];
                $input[$input[$i + 3]] = $result;
                break;
        }
    }
    return $input;
}
$new = calcInput($intCode, 12, 2);
var_dump($new[0]); //3101844

function calcOutput($array) {
    for ($i = 0; $i < 100; $i++) {
        for ($j = 0; $j < 100; $j++) {
            $newArray = $array;
            $resultArray = calcInput($newArray, $i, $j);
            if ($resultArray[0] === 19690720) {
                return [$i, $j];
            }
        }
    }
}
var_dump(calcOutput($intCode)); // [84, 78]

