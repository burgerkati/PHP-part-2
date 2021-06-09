<?php
for ($number = 1; $number <= 15; $number++) {
    if ($number != 15) {
      echo 'Almost there...';
    } else {
      echo 'Here we are ';
    }
    echo $number . '<br>';
}
?>
<!--
// this loop also works - thank you Olga & Wiam!
$i = 1;
    while($i < 15) {
      echo "<p>Tour $i : On y est presque</p>";
      $i++;
    } echo "<p>Voilà fini</p>";
-->
