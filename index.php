<?php
require 'tracy/tracy.phar';
use Tracy\Debugger;
Debugger::enable();
Debugger::$strictMode = true;

echo 23;
echo"<br>";
print (3.89);
echo"<br>";
echo "Covid-19";
echo"<br>";
print(FALSE);
echo " Jak "." se máš? ";
echo "<img src=\"OnePlus 8.jpg\">";
echo "\\";
            
$a = 20;
echo "<br>";
$b = 7;

echo "<br>";

dump ($a + $b);

echo "<br>";

$a = 20;
echo"<br>";
$b = 7;

dump ($a - $b);

echo "<br>";

$a = 20;
echo"<br>";
$b = 7;

dump ($a / $b);

echo "<br>";

$a = 20;
echo"<br>";
$b = 7;

dump ($a * $b);

echo "<br>";

$a = 20;
echo"<br>";
$b = 7;
            
dump ($a += $b);

echo "<br>";

$a = 20;
echo"<br>";
$b = 7;

dump ($a -= $b);

echo "<br>";

$a = 20;
echo"<br>";
$b = 7;

dump ($a *= $b);

echo "<br>";

$a = 20;
echo"<br>";
$b = 7;

dump ($a /= $b);

echo "<br>";

$a = 20;
echo"<br>";
$b = 7;

dump ($a == $b);

echo "<br>";

$a = 20;
echo"<br>";
$b = 7;

dump ($a != $b);

echo "<br>";

$a = 20;
echo"<br>";
$b = 7;

dump ($a > $b);

echo "<br>";

$a = 20;
echo"<br>";
$b = 7;

dump ($a < $b);

echo "<br>";
$a = 20;
echo"<br>";
$b = 7;

dump ($a || $b);

echo "<br>";
           
$a = 20;
echo"<br>";
$b = 7;

dump ($a && $b);

?>