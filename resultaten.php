<?php
    session_start();
    $toets = $_GET['toets'];
?>

<link rel="stylesheet" href="css/table.css">

<table class="container">
	<thead>
		<tr>
			<th><h1>Sommen</h1></th>
			<th><h1>Jou antwoord</h1></th>
			<th><h1>Juiste antwoord</h1></th>
			<th><h1>Goed / Fout</h1></th>
		</tr>
	</thead>
	<tbody>
            <?php
            if ($toets == false) {
                echo '<tr>';
                    for ($i=0; $i < 20; $i++) { 
                        echo '<td>' . $_SESSION['sommen'][$i][0] . $_SESSION['sommen'][$i][2] . $_SESSION['sommen'][$i][1] . '</td>';
                        echo '<td>' . $_SESSION['antwoorden'][$i] . '</td>';
                        if ($_SESSION['sommen'][$i][2] == '+') {
                            $antwoord = $_SESSION['sommen'][$i][0] + $_SESSION['sommen'][$i][1];
                    
                        }elseif ($_SESSION['sommen'][$i][2] == '-') {
                            $antwoord = $_SESSION['sommen'][$i][0] - $_SESSION['sommen'][$i][1];
                    
                        }elseif ($_SESSION['sommen'][$i][2] == 'x') {
                            $antwoord = $_SESSION['sommen'][$i][0] * $_SESSION['sommen'][$i][1];
                    
                        }elseif ($_SESSION['sommen'][$i][2] == ':') {
                            $antwoord = $_SESSION['sommen'][$i][0] / $_SESSION['sommen'][$i][1];
                        }
                        echo '<td>' . $antwoord . '</td>';
                        if ($antwoord == $_SESSION['antwoorden'][$i]) {
                            echo '<td style="color:green">GOED!</td>';
                        }else {
                            echo '<td style="color:red">FOUT!</td>';
                        }
                        echo '</tr>';
                    }
            }elseif ($toets == true) {
                //laat aleen punt zien.
            }
            ?>
	</tbody>
</table>
