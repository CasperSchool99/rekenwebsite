<?php
$groep = "6";
if($groep == "4"){
	$Getal1= rand(1,10);
	$Getal2= rand(1,10);
}
elseif ($groep == "5") {
	$Getal1= rand(1,20);
	$Getal2= rand(1,20);
}
elseif ($groep == "6") {
	$Getal1= rand(1,100);
	$Getal2= rand(1,100);
}
else{
	var_dump($groep);
}

function Keersom($Getal1, $Getal2) {
	$Uitkomst = $Getal1 * $Getal2;
	echo $Getal1 . 'x' . $Getal2 . '=' . $Uitkomst;
	return;
}

Keersom($Getal1, $Getal2);
?>