<!-- php string -->
<?php

// strcmp
echo strcmp("Hello","Hello");

// strlen
echo strlen("Hello");

// print
print "Hello world!";

// number_format
echo number_format("10000000",2);
?>

<!-- php array -->
<?php
$name = array("safal"=>"25", "sid"=>"30", "sujit"=>"38");
sort($name);

rsort($name);

asort($name);

ksort($name);

arsort($name);

krsort($name);
?>