<?php
$number = 7; // Replace 7 with the number of your choice

echo "<table>";
echo "<tr><th>Multiplication Table for $number</th></tr>";
for ($i = 1; $i <= 10; $i++) {
  $result = $number * $i;
  echo "<tr><td>$number x $i = $result</td></tr>";
}
echo "</table>";
?>

