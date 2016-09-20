<?php
//declare variable
$var = 'jamal';
$Var = 'kamal';
echo "$var, $Var";
echo "<br>";

//$5set = "not yet";  //invalid; starts with a number
$_5set = 'not yet'; //valid; starts with a underscore
echo $_5set;
echo "<br>";
$naika = 'mahasakti'; //valid; 'a' is (Extended) ASCII 228

echo $naika;
?>

<?php
//declare array
$cars = array("Apple", "Orange", "Guava");

echo "I like " .$cars[0]."," .$cars[1]. "," .$cars[2];

echo "<br>";

?>

<?php
//declare global function
$x = 75;
$y = 65;
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;
echo "<br>";

?>

<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>



