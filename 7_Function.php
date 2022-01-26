<?php declare(strict_types=1);   // strict requirement
function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // call the function

function addNumbers(float $a, float $b) : float {
  return $a + $b;
}
echo var_dump(addNumbers("2", 5.2));
?>