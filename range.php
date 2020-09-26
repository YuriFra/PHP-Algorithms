<?php
//find the largest range in an array of numbers
$numbers = [12, 3, 6, 1, 5, 7, 4, 11, 9, 13];
sort($numbers);

$rangeMin = $numbers[0];
$rangeMax = $numbers[0];

$newRangeMin = $numbers[0];
$newRangeMax = $numbers[0];

$lastNumber = $numbers[0];

for($i = 1, $iMax = count($numbers); $i < $iMax; $i++){
    if($numbers[$i] === $lastNumber + 1){
        $newRangeMax = $numbers[$i];
        if(count(range($rangeMin, $rangeMax)) < count(range($newRangeMin, $newRangeMax))){
            $rangeMin = $newRangeMin;
            $rangeMax = $newRangeMax;
        }
    } else {
        $newRangeMin = $numbers[$i];
        $newRangeMax = $numbers[$i];
    }
    $lastNumber = $numbers[$i];
}

echo "The largest range is: ".$rangeMin." - ".$rangeMax;
