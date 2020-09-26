<?php
//advent of code day 4
//check if numbers are ascending and include 2 of the same number
$input = range(134564, 585159);
$passwords = [];
$num = [1,1,4,5,4,4];

foreach ($input as $number) {
    $array = [];
    $valid = [];
    $array = str_split((string)$number);
    $valid[] = $array[0];
    for ($i = 0, $iMax = count($array)-1; $i < $iMax; $i++) {
        if ((int)$array[$i] <= (int)$array[$i+1]) {
            $valid[] = $array[$i+1];
        }
    }
    if ((count($valid) === 6) && (count($valid) !== count(array_flip($valid)))) {
        $passwords[] = implode('', $valid);
    }
}

var_dump(count($passwords)); //1929 valid answers
