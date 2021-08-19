<?php

$string = strtolower(readline("Write a word to convert: "));
$stringArray = str_split($string);
$convertedString = "";

$keypad = [
    "abc" => "2",
    "def" => "3",
    "ghi" => "4",
    "jkl" => "5",
    "mno" => "6",
    "pqrs" => "7",
    "tuv" => "8",
    "wxyz" => "9"
];

foreach ($stringArray as $character) {
    foreach ($keypad as $key => $value) {
        $position = strpos($key, $character);
        if ($position !== false)
        {
            $convertedString .= $value . str_repeat($value, $position);
        }
    }
}

echo "{$string} converted to numbers is {$convertedString}.";
