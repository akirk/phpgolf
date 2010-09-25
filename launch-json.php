<?php
for($i = 0; $i<20;$i++) {
	$x = "";
for ($j = 0,$l=rand(3,5);$j < $l;$j++) {
	$x .= chr(rand(ord('a'), ord('z')));
}
$a[$x] = rand(100, 20000);
}
var_dump($a);
define(JSON, str_replace(":", ": ", json_encode($a)));
include "json.php";
