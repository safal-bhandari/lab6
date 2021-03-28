<html>
<body>

<?php

$detail = array("bigyan"=>"35", "abishek"=>"37", "prajwal"=>"43");

<!-- associative array output -->

echo "Peter is " . $detail['Peter'] . " years old.";

<!-- foreach output -->

foreach($detail as $x => $value) {
  echo "Key=" . $x . ", Value=" . $value;
  echo "<br>";
}

?>

</body>
</html>