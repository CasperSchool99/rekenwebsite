<?php
$Getal1= 0;
$Getal2= 0;

function Plussom() {
	$Getal1 = rand(1,10);
	$Getal2 = rand(1,10);
	$Uitkomst = $Getal1 + $Getal2;
	echo $Getal1 . ' + ' . $Getal2 . ' =';
	return;
}
/*
$i = 0;
while ($i <= 20) {
	$i++;
	Plussom($Getal1, $Getal2);
}
*/


?>

<form>
	<label for="awnser"><?php Plussom(); ?></label>
	<input type="text" name="awnser">
	<input type="submit" name="submit">
</form>