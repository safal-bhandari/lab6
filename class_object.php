<html>
<body>

<?php
class Device {

  public $name;

  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$dell = new Device();
$acer = new Device();
$dell->set_name('hp');
$acer->set_name('dell');
?>

<h1><?= $dell->get_name() ?></h1>
<h1><?= $acer->get_name() ?></h1>
 
</body>
</html>