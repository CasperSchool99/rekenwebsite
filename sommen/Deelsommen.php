<?php
while (true) {
    if ($groep == '4') {
        $Getal1 = rand(1, 10);
        $Getal2 = rand(1, 10);
    }elseif ($groep == '5') {
        $Getal1 = rand(1, 20);
        $Getal2 = rand(1, 20);
    }elseif ($groep == '6') {
        $Getal1 = rand(1, 100);
        $Getal2 = rand(1, 100);
    }else {
        echo "helemaal fout gegaan joh flink wat errors hier ik zou system32 verwijderen als ik jou was. houdoe.";
    }
        if ($Getal1 % $Getal2 == 0) {
            break;
        }
    }