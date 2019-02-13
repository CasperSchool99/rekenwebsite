<?php 
    session_start();

    $Getal1 = rand(1,10);
    $Getal2 = rand(1,10);
    $operator = "+";

    if (!isset($_SESSION['viewed'])) {
        $_SESSION['viewed'] = 0;
        $_SESSION['array'] = 0;
        $_SESSION['sommen'] = array();
        $_SESSION['index'] = 0;
    }
    if ($_SESSION['viewed'] == 0) {
        $_SESSION['viewed'] = 1;
    }
    echo"
        <form method='post'>
            <label for='awnser'>  </label>
            <input type='text' name='answer'>
            <input type='submit' name='submit'>
        </form>
    ";
            if ($_SESSION['array'] == ""){
                $answers = array();
                $sommen = array();
                $_SESSION['array'] = $answers;
                $_SESSION['sommen'] = $sommen;
            }else{
                $answers = $_SESSION['array'];
                $sommen = $_SESSION['sommen'];
            }

        if (isset($_POST['submit'])){
            $_SESSION['answer'] = $_POST['answer'];
            $som = array($Getal1, $Getal2, $operator);

            AddToArrayAndSession($answers, $_POST['answer']);
            AddToArrayAndSessionsom($sommen, $som);

        }
        function AddToArrayAndSession($answers, $newitem){
            array_push($answers, $newitem);
            $_SESSION['array'] = $answers;
        }
        function AddToArrayAndSessionsom($sommen, $som){
            if ($_SESSION['index'] >= 20) {
                header('location:resultaten.php');
            }else{
            array_push($sommen, $som);
            $_SESSION['sommen'] = $sommen;
            header('Refresh:0');
            $_SESSION['index']++;
            }
        }
        echo $Getal1;
        echo $Getal2;
        echo"<pre>";
        var_dump($_SESSION['array']);
        echo"</pre><br/><pre>";
        var_dump($_SESSION['sommen']);
        echo"</pre";


?>