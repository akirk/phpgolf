<?php
$x = "";
$i=rand(2,50);//$i*=$i;
// $i = 25;
for ($j = 0;$j < $i;$j++) {
	// if (rand(0, 100) > 80) $x .= " ";
	// $x .= chr(ord('A')+$j);
	$x .= chr(rand(ord('a'), ord('z')));
}
$x = "abcdez";
// echo sprintf("%u", crc32($x)), "\n";
echo $x, "\n";
define(WORD, $x);

include "rot13.php";
