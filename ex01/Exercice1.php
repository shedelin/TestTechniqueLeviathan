#!/usr/bin/php
<?php

$tab = array();
for ($i = 1; $i <= 100; $i++) {
    if (!($i % 3) && !($i % 5))
    	$tab[$i - 1] = "LeviaTan";
    elseif (!($i % 3))
    	$tab[$i - 1] = "Levia";
    elseif (!($i % 5))
    	$tab[$i - 1] = "Tan";
    else
    	$tab[$i - 1] = "$i";
}

echo "[";
foreach ($tab as $key => $value) {
	if ($key == 99)
		echo '"'."$value".'"]'."\n";
	else
		echo '"'."$value".'", ';

}

?>