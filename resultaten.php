<?php
    session_start();

    for ($i=0; $i < 20; $i++) { 
        echo 'de som was: ' . $_SESSION['sommen'][$i][0] . $_SESSION['sommen'][$i][2] . $_SESSION['sommen'][$i][1] . '<br/>';
        echo 'jou antwoord was: ' . $_SESSION['antwoorden'][$i] . '<br/>';
        if ($_SESSION['sommen'][$i][2] == '+') {
            $antwoord = $_SESSION['sommen'][$i][0] + $_SESSION['sommen'][$i][1];
    
        }elseif ($_SESSION['sommen'][$i][2] == '-') {
            $antwoord = $_SESSION['sommen'][$i][0] - $_SESSION['sommen'][$i][1];
    
        }elseif ($_SESSION['sommen'][$i][2] == 'x') {
            $antwoord = $_SESSION['sommen'][$i][0] * $_SESSION['sommen'][$i][1];
    
        }elseif ($_SESSION['sommen'][$i][2] == ':') {
            $antwoord = $_SESSION['sommen'][$i][0] / $_SESSION['sommen'][$i][1];
        }
        echo 'het goede antwoord was: ' . $antwoord . '<br/>';
        if ($antwoord == $_SESSION['antwoorden'][$i]) {
            echo '<div style="color:green">jou antwoord was: GOED!</div><br/><br/>';
        }else {
            echo '<div style="color:red">jou antwoord was: FOUT!</div><br/><br/>';
        }
    }
?>
