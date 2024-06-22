#!/usr/bin/php
<?php

$tab = array();
$handle = fopen("php://stdin", 'r');
$str_imput = fgets($handle);
$str_to_explode = "";
for ($i = 1; $i < (strlen($str_imput) - 2); $i++)
	$str_to_explode[$i - 1] = $str_imput[$i];

$tab = explode(", ", $str_to_explode);
$result = 0;
foreach ($tab as $key => $value) {
	if (!($value % 2))
		$result += (int)$value;
}

echo "$result\n";

?>