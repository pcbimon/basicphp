<?php
date_default_timezone_set('Asia/Bangkok');
$t = date("H");
echo "This Hour is $t <br>";
if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>