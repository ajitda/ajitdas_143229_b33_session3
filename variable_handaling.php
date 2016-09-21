<?php
//floatval
$string_with_float = "235.269bitm45.55";

echo floatval($string_with_float);

echo "<br>";

//empty
$x = 0;
$empty_type=  empty($x);
var_dump($empty_type);
echo "<br>";



//print_r
$x = 58963;

print_r($x);

echo "<br>";




$data = array(1, 1., NULL, new stdClass, 'foo');

foreach ($data as $value) {
    echo gettype($value), "\n";
}


