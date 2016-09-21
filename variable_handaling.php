<?php
$x = 58963;

print_r($x);

?>


<?php

$data = array(1, 1., NULL, new stdClass, 'foo');

foreach ($data as $value) {
    echo gettype($value), "\n";
}

?>
