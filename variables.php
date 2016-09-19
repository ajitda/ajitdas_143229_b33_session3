<?php
//declare variable
$var = 'vob';
$Var = 'joe';

echo "$var, $Var";

echo "<br>";

//declare array
$cars = array("Volvo", "BMW", "Toyota");

echo "I like " .$cars[0]."," .$cars[1]. "," .$cars[2];

echo "<br>";


//declare global function
$x = 75;
$y = 65;

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];

}
addition();

echo $z;

echo "<br>";
echo $_SERVER['PHP_SELF'];
echo $_SERVER['PHP_SELF'];