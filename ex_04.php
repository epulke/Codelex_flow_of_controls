<?php

/**
 * Write a program which prints “Sunday”, “Monday”, ... “Saturday” if the int variable "dayNumber" is 0, 1, ..., 6,
 * respectively. Otherwise, it shall print "Not a valid day".
 * Use:
 * a "nested-if" statement
 * a "switch-case-default" statement.
 */

$number = (int) readline("Enter week day number (0-6): ");

$weekDays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

// using if statement
if ($number >= 0 && $number <= 6) {
    echo "You have chosen $weekDays[$number]" . PHP_EOL;
} else {
    echo "Not a valid day." . PHP_EOL;
}


// using switch statement
switch (true) {
    case ($number >= 0 && $number <= 6):
        echo "You have chosen $weekDays[$number]" . PHP_EOL;
        break;
    default:
        echo "Not a valid day." . PHP_EOL;
        break;
}