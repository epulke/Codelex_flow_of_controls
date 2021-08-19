<?php

//todo print the largest number

$number1 = (int) readline("Input the 1st number: ");

$number2 = (int) readline("Input the 2nd number: ");

$number3 = (int) readline("Input the 3rd number: ");

$largestNumber = max($number1, $number2, $number3);

echo "Largest number is {$largestNumber}.";

