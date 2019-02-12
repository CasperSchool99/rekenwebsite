<?php
while (true) {
	$getal1 = rand(1,10);
	$getal2 = rand(1,10);
	if ($getal1 - $getal2 >= 0) {
		$uitkomst= $getal1 - $getal2;
		echo $getal1 . "-" . $getal2 . "=" . $uitkomst;
		break;
	}
}
?>