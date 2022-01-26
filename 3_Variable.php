<?php
$number = 10;
echo $number;
$str = "<br>This is string variable but number variable is ";
echo $str;
$combineStrNInt = $str.$number;
echo $combineStrNInt."<br>";

$numStr = "5";
echo $number +  $numStr;

//Data Type
echo "<br>";
var_dump($number);
echo "<br>";
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  //$x = 10; /* uncomment this line */
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>