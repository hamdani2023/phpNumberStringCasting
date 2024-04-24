<?php

// Integers
$integer = 42;
$phpIntMax = PHP_INT_MAX;
$phpIntMin = PHP_INT_MIN;
$phpIntSize = PHP_INT_SIZE;

// Check if variable is an integer
$isInt = is_int($integer);

// Floats
$float = 3.14;
$phpFloatMax = PHP_FLOAT_MAX;
$phpFloatMin = PHP_FLOAT_MIN;
$phpFloatDig = PHP_FLOAT_DIG;
$phpFloatEpsilon = PHP_FLOAT_EPSILON;

// Check if variable is numeric
$varNumeric = "42";
$isNumeric = is_numeric($varNumeric);

// Output
echo "Integer: $integer<br>";
echo "PHP_INT_MAX: $phpIntMax<br>";
echo "PHP_INT_MIN: $phpIntMin<br>";
echo "PHP_INT_SIZE: $phpIntSize<br>";
echo "is_int(\$integer): " . ($isInt ? "true" : "false") . "<br>";

echo "<br>Float: $float<br>";
echo "PHP_FLOAT_MAX: $phpFloatMax<br>";
echo "PHP_FLOAT_MIN: $phpFloatMin<br>";
echo "PHP_FLOAT_DIG: $phpFloatDig<br>";
echo "PHP_FLOAT_EPSILON: $phpFloatEpsilon<br>";

echo "<br>Variable \$varNumeric: $varNumeric<br>";
echo "is_numeric(\$varNumeric): " . ($isNumeric ? "true" : "false") . "<br>";

// Display variable types
echo "<br>Variable types:<br>";
var_dump($integer);
echo "<br>";
var_dump($float);
echo "<br>";
var_dump($varNumeric);
echo "<br>";

