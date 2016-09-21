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

//var_export
$y = array('gmail', 'email', 'live');
var_export($y);
echo "<br>";

//gettype
$n = array('xmen', 'tmen', 'zimen');
var_dump(gettype($n));
$m = 'this is string type';
var_dump(gettype($m));
echo "<br>";

//is_bool
$pb = true;
$ps = 'this is not bool';
var_dump(is_bool($pb));
var_dump(is_bool($ps));
echo "<br>";

//serialize & unserilize
$trans = array('car', 'bus', 'truck', 'boat'=>array('p','q', 'r'), 'plane');
$str = serialize($trans);
echo $str.'<br>';
$myPreviousValue = unserialize($str);
print_r($myPreviousValue);
echo "<br>";

//is_float
$xing = 45048;
var_dump(is_float($xing));
$float = 45.69823;
var_dump(is_float($float));
echo "<br>";

//is_string
$xing = 'this is a string';
var_dump(is_string($xing));
$float = 5896321145;
var_dump(is_string($float));
echo "<br>";


//is_int
$xing = 'this is a string';
var_dump(is_int($xing));
$x = 589885765;
var_dump(is_int($x));
echo "<br>";

$data = array(1, 1., NULL, new stdClass, 'foo');

foreach ($data as $value) {
    echo gettype($value), "\n";
}


