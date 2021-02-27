<?php

// Function which prints "Hello I am Katie"

// Function with argument

// Create sum of two functions

// Create function to sum all numbers using ...$nums

// Arrow functions

function isPalindrome($x) {
    if($x < 0) {
        return false;
    }

    $numList=[];
    while ($x > 0) {
        array_unshift($numList, $x % 10);
        $x = ($x / 10) | 0;
    }

    $mid = floor(count($numList) / 2);
    $right = null;

    if (count($numList) % 2 === 0) {
        $right = array_splice($numList, $mid);
    } else {
        $right = array_splice($numList, $mid + 1);
    }

    $left = array_splice($numList, 0, $mid);
    $right = array_reverse($right);

    if (implode("", $right) === implode("", $left)) {
        return true;
    }

    return false;
}

echo isPalindrome(121);
echo '<br>';

function twoSum($nums, $target) {
    for ($x = 0; $x < count($nums); $x++) {
        for ($j = $x+1; $j < count($nums); $j++) {
            if($nums[$x] + $nums[$j] === $target) {
                return [$x, $j];
            }
        }
    }
}

print_r(twoSum([2, 7, 11, 15], 9));
echo '<br>';
echo '<br>';
var_dump([1, 2, 3, 4]);
echo '<br>';
