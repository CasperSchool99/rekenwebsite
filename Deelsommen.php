<?php
while (true) {
        $getal1 = rand(1, 10);
        $getal2 = rand(1, 10);
        if ($getal1 % $getal2 == 0) {
            echo $getal1 . "<br/>" . $getal2;
            break;
        }
?>