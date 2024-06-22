#!/usr/bin/php
<?php

$tab = array();
$handle = fopen("php://stdin", 'r');
$str_imput = fgets($handle);
$result = "";
$y = 0;
for ($i = (strlen($str_imput) - 2); $i >= 0; $i--)
	$result[$y++] = $str_imput[$i];

echo $result."\n";

?>