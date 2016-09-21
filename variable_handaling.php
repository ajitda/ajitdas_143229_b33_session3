<?php
$string_with_float = "235.269bitm45.55";

echo floatval($string_with_float);

?>
<br>
<?php
$x = 58963;

print_r($x);

?>
<br>

<?php

$data = array(1, 1., NULL, new stdClass, 'foo');

foreach ($data as $value) {
    echo gettype($value), "\n";
}

?>
