<?php
// Arrow function
$total = 50;
$addAmount = fn($amount) => $total + $amount;
echo "{$addAmount(10)}\n";
// Función anónima
$addAmount_ = function($amount) use ($total) {
    return $total + $amount;
};
echo "{$addAmount_(100)}\n";

// Ejemplo Arrow function
$numbers = [1,2,3,4,5,6,7,8,9];
$pairs = array_filter($numbers, fn($number) => $number % 2 ===0);
var_dump($pairs);echo"\n";

// Ejemplo función anónima
$pairs_ = array_filter($numbers, function($number) {
    return $number % 2 === 0;
});
var_dump($pairs_);echo "\n";

