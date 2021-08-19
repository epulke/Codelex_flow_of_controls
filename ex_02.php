<?php

//todo print if number is positive or negative

$enteredNumber = (int) readline("Enter the number: ");

if ($enteredNumber > 0) {
    echo "Entered number is positive.";
} elseif ($enteredNumber === 0) {
    echo "You have entered number 0.";
} else {
    echo "Entered number is negative";
}


