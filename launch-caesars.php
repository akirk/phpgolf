<?php
$x = "";
$i=rand(2,50);$i*=$i;
$i = 25;
for ($j = 0;$j < $i;$j++) {
	if (rand(0, 100) > 80) $x .= " ";
	$x .= chr(ord('A')+$j);
	// $x .= chr(rand(ord('A'), ord('Z')));
}
var_dump($x);var_dump(sqrt(strlen($x)));
define(WORDS, $x);
include "caesars.php";
