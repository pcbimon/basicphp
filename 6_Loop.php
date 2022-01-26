<h3>While Loop</h3>
<?php
$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}

?>
<br>
<h3>Do-While Loop</h3>
<?php
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?>
<br>
<h3>For Loop</h3>
<?php
for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}
?>