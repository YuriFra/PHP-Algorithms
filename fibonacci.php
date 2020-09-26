<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

function fibonacci($number) {
    $firstValue = 0;
    $secondValue = 1;
    for ($i = 2; $i < $number; $i++ ) {
        $result = $firstValue + $secondValue;
        $firstValue = $secondValue;
        $secondValue = $result;
    }
    return $secondValue;
}
$value = fibonacci(5);
echo $value;
