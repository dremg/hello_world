<?php

$o= new stdclass;
$o->a= 'b';
$o->b= 'c';

$o2= $o;
$o2->a= 'd';

echo "<p>";
var_dump($o);
echo "<br>";
var_dump($o2);
echo "</p>";

$o3= clone $o;
$o3->a= 'e';

echo "<p>";
var_dump($o);
echo "<br>";
var_dump($o3);
echo "</p>";
?>