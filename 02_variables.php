<?php

// Variable types

/*
    String
    Integer
    Float
    Boolean
    Null
    Array
    Object
    Resource
*/

// Declare variables
$name = 'Katie';
$age = 29;
$isFemale = true;
$height = 1.85;
$salary = null;

// Print the variables. Explain what is concatenation

echo 'Name: '.$name.'<br>';
echo 'Age: '.$age.'<br>';
echo 'Female: '.$isFemale.'<br>';
echo 'Height: '.$height.'<br>';
echo 'Salary: '.$salary.'<br>';

echo '<br>';
// Print types of the variables

echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($isFemale).'<br>';
echo gettype($height).'<br>';
echo gettype($salary).'<br>';

echo '<br>';

// Print the whole variable

var_dump($name, $age, $isFemale, $height, $salary);

echo '<br>';

// Change the value of the variable

// Print type of the variable

// Variable checking functions
is_string($name);
is_int($age);
is_bool($isFemale);
is_double($salary);

// Check if variable is defined
isset($name); //true
isset($address); //false

// Constants
define('PI', 3.14);
echo PI.'<br>';

echo '<br>';

// Using PHP built-in constants
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';