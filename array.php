<?php
$name = array("bomb"=>"35", "grenade"=>"37", "gun"=>"43");

$length = count($name);

sort($name);
for($x = 0; $x < $length; $x++) {
  echo $name[$x];
  echo "<br>";
}

rsort($name);

for($x = 0; $x < $length; $x++) {
  echo $name[$x];
  echo "<br>";
}

asort($name);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

ksort($name);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

arsort($name);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

krsort($name);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

?>