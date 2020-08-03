<?php

require __DIR__ . "/vendor/autoload.php";

//Create a function, squares, that takes an array of numbers as an argument. Return a new array containing the square of each number.

//Try it using foreach
//Try it using collect() (you'll need the illuminate/support package)

$numbers = collect([1,2,3,4,5]);

$squared = $arr ->map(fn($n) => $n*$n);

dump($squared ->all());

