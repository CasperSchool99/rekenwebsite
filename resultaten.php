<?php
    session_start();
    $toets = 0;
    if (isset($_GET['toets'])) {
        $toets = $_GET['toets'];
    }
    $igoed = 0;
    $ifout = 0;
    $icijfer = 10;
?>

<link rel="stylesheet" href="css/table.css">
<link rel="stylesheet" href="css/btn.css">	
            <?php
            if ($toets == 0) {
                echo '
                <div class="panel blue">
                    <a href="session_destroy_index.php">
                        <button> Terug </button>
                    </a>
                </div>
                <table class="container">
                <thead>
                <tr>
                    <th><h1>Sommen</h1></th>
                    <th><h1>Jouw antwoord</h1></th>
                    <th><h1>Juiste antwoord</h1></th>
                    <th><h1>Resultaat</h1></th>
                </tr>
                </thead>
                <tbody>
                <tr>';
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
                        echo'</tbody>
                        </table>';
            }elseif ($toets == 1) {
                for ($i=0; $i < 20; $i++) {
                    if ($_SESSION['sommen'][$i][2] == '+') {
                        $antwoord = $_SESSION['sommen'][$i][0] + $_SESSION['sommen'][$i][1];
                
                    }elseif ($_SESSION['sommen'][$i][2] == '-') {
                        $antwoord = $_SESSION['sommen'][$i][0] - $_SESSION['sommen'][$i][1];
                
                    }elseif ($_SESSION['sommen'][$i][2] == 'x') {
                        $antwoord = $_SESSION['sommen'][$i][0] * $_SESSION['sommen'][$i][1];
                
                    }elseif ($_SESSION['sommen'][$i][2] == ':') {
                        $antwoord = $_SESSION['sommen'][$i][0] / $_SESSION['sommen'][$i][1];
                    }
                    if ($antwoord == $_SESSION['antwoorden'][$i]) {
                        $igoed++;
                    }else{
                        $ifout++;
                        $icijfer -= 0.5;
                    }
                    if ($i == 19) {
                        echo '<div class="cijfer">je hebt ' 
                        . $igoed . 
                        ' vragen goed.<br/>je hebt ' 
                        . $ifout . 
                        ' vragen fout.<br/>uw punt is ' 
                        . $icijfer .
                        '<div class="panel blue center">
                            <a href="session_destroy_index.php">
                                <button> Terug </button>
                            </a>
                        </div>';
                    }
                }
            }
            ?>
