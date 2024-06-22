#!/usr/bin/php
<?php

function test_tab(string $str, int $int_to_have) {
	$result = "False";
	$tab = explode(", ", $str);
	$tab_len = sizeof($tab);
	foreach ($tab as $key => $value) {
		if ($key == $tab_len -1)
			break ;
		for ($i = $key; $i < $tab_len ; $i++) {
			if (((int)$value + (int)$tab[$i]) == $int_to_have) {
				$result = "True";
				break ;
			}
		}
	}

	return $result;
}

$tab = array();
$handle = fopen("php://stdin", 'r');
$str_imput = fgets($handle);
$str_to_explode = "";
for ($i = 13; $i < (strlen($str_imput) - 2); $i++)
	$str_to_explode[$i - 1] = $str_imput[$i];


$tab = explode("], ", $str_to_explode);
echo test_tab($tab[0], (int)$tab[1])."\n";