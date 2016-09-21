<?php
//floatval
$string_with_float = "235.269bitm45.55";
echo floatval($string_with_float);
echo "<br>";

//empty
$x = 0;
$empty_type=  empty($x);
var_dump($empty_type);
$y = 89;
$not_empty=  empty($y);
var_dump($not_empty);
echo "<br>";

//is_array
$birds = array('Parrot','Sparrow', 'Kite');
var_dump(is_array($birds));
$string ='this is a string not array';
var_dump(is_array($string));
echo "<br>";

//is_null
$foo = null;
$fooi = 85;
var_dump(is_null($foo));
var_dump(is_null($fooi));
echo "<br>";

//isset & unset
$name='';
$pass='5896';
var_dump(isset($name));
var_dump(isset($name, $pass));
unset($name);
var_dump(isset($name));
var_dump(isset($name, $pass));
$age= null;
var_dump(isset($age));
echo "<br>";

//print_r
$x = 58963;
print_r($x);
$a = array('a' => 'apple', 'b' => 'bannana', 'c' => array('w','x','y','z'));
print_r($a);
echo "<br>";




$data = array(1, 1., NULL, new stdClass, 'foo');

foreach ($data as $value) {
    echo gettype($value), "\n";
}


