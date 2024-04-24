<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
 
// Original variables
$floatNum = 3.14;
$stringNum = "42";
$boolValue = true;

// Casting to integer
$castToInt = (int) $floatNum; // Cast float to integer
$castToIntFromString = (int) $stringNum; // Cast string to integer
// Casting to float
$castToFloat = (float) $stringNum; // Cast string to float
// Casting to string
$castToString = (string) $boolValue; // Cast boolean to string
// Output
echo "Original Float: $floatNum, Cast to Integer: $castToInt<br>";
echo "Original String: $stringNum, Cast to Integer: $castToIntFromString<br>";
echo "Original String: $stringNum, Cast to Float: $castToFloat<br>";
echo "Original Boolean: $boolValue, Cast to String: $castToString<br>";

