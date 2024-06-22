#!/usr/bin/php
<?php

$tab = array();
$handle = fopen("php://stdin", 'r');
$str_imput = fgets($handle);
$result = "True";
$y = (strlen($str_imput) - 2);
for ($i = 0; $i < $y; $i++) {
	if ($str_imput[$y--] != $str_imput[$i]) {
		$result = "False";
		break ;
	}
}

echo $result."\n";

?>