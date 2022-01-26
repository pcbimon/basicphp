<?php
//Check is integer number
echo "<h3>Use is_int() to check type of variable is interger</h3>";
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));
//Check is floating number
echo "<h3>Use is_float() to check type of variable is float</h3>";
$x = 10.365;
var_dump(is_float($x));

echo "<h3>Numberic string</h3>";
$x = 5985;
echo $x;
echo "<br>";
var_dump(is_numeric($x));
echo "<br>";

$x = "5985";
echo $x;
echo "<br>";
var_dump(is_numeric($x));
echo "<br>";

$x = "59.85" + 100;
echo $x;
echo "<br>";
var_dump(is_numeric($x));
echo "<br>";

$x = "Hello";
echo $x;
echo "<br>";
var_dump(is_numeric($x));
echo "<br>";

echo "<h3>Cast float <-> INT</h3>";

// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo var_dump($int_cast);

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo var_dump($int_cast);

echo "<br>";
// Cast string to float
$x = "23465.768";
$int_cast = (float)$x;
echo var_dump($int_cast);
?>