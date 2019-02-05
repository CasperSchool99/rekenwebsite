<?php
$Getal1= rand(1,10);
$Getal2= rand(1,10);

function Plussom($Getal1, $Getal2) {
	$Uitkomst = $Getal1 + $Getal2;
	echo $Getal1 . '+' . $Getal2 . '=' . $Uitkomst;
	return;
}

Plussom($Getal1, $Getal2);
?>