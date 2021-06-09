<?php
$numberRandom = rand(1, 100);
for ($number = 0; $number <= 20; $number++) {
  echo $numberRandom . '<br>';
  echo ($numberRandom*$number);
}
?>
