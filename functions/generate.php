<?php

namespace Functions\Generate;

function generatePassword(int $uppercase, $lowercase, $digit, $symbol): string
{
    $upper = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $lower = "abcdefghijklmnopqrstuvwxyz";
    $number = "0123456789";



    for ($i = 0; $i < $uppercase; $i++) {
        $upperArray[$i] = $upper[random_int(0, strlen($upper)-1)];
    }

    for ($i = 0; $i < $lowercase; $i++) {
        $lowerArray[$i] = $lower[random_int(0, strlen($lower)-1)];
    }

    for ($i = 0; $i < $digit; $i++) {
        $digitArray[$i] = $number[random_int(0, strlen($number)-1)];
    }

    for ($i = 0; $i < $symbol-($uppercase+$lowercase+$digit); $i++) {
        $symbolArray[$i] = $upper[random_int(0, strlen($upper)-1)];
    }
    if (
        $uppercase < 0 &&
        $lowercase < 0 &&
        $digit < 0 &&
        $symbol < 0 &&
        $uppercase + $lowercase + $digit > $symbol
    ) {
        print_r("Please try again...");
        exit;
    }


    return implode("", $upperArray) . implode("", $lowerArray). implode("", $digitArray) . implode("", $symbolArray);
}