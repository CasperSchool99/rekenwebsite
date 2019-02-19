<!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" href="css/rekensommen.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
<head>
    <title></title>
</head>
<body>
<div class="background">
    <div class="grey">
<?php 
    session_start();
    $Getal1 = 0;
    $Getal2 = 0;
    $operator = $_GET['operator'];
    $groep = $_GET['groep'];
    if ($operator == 'plus') {
        $operator = "+";
    }elseif ($operator == 'min') {
        $operator = "-";
    }elseif ($operator == 'keer') {
        $operator = "x";
    }elseif ($operator == 'deel') {
        $operator = ":";
        include('sommen/Deelsommen.php');
    }elseif ($operator == 'toets') {
        $items = Array('+','-','x',':');
        $operator = $items[array_rand($items)];
        if ($operator == ':') {
            include('sommen/Deelsommen.php');
        }
    }
    else {
        echo "helemaal fout gegaan joh flink wat errors hier ik zou system32 verwijderen als ik jou was. houdoe.";
    }
    if ($operator == ":") {   
    }else {
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
    }
    if (!isset($_SESSION['viewed'])) {
        $_SESSION['viewed'] = 0;
        $_SESSION['antwoorden'] = 0;
        $_SESSION['sommen'] = array();
        $_SESSION['index'] = 0;
    }
    if ($_SESSION['viewed'] == 0) {
        $_SESSION['viewed'] = 1;
    }
    echo"
        <form method='post'>
            <label for='awnser'>";
            echo $Getal1 . " " .  $operator . " " .  $Getal2 . " = " ;
            echo"  </label>
            <input type='number' name='answer'>
            <input type='submit' name='submit' value='Volgende'>
        </form>
    ";
            if ($_SESSION['antwoorden'] == ""){
                $answers = array();
                $sommen = array();
                $_SESSION['antwoorden'] = $answers;
                $_SESSION['sommen'] = $sommen;
            }else{
                $answers = $_SESSION['antwoorden'];
                $sommen = $_SESSION['sommen'];
            }
            $som = array($Getal1, $Getal2, $operator);
            AddToArrayAndSessionsom($sommen, $som);

        if (isset($_POST['submit'])){
            $_SESSION['answer'] = $_POST['answer'];
            AddToArrayAndSession($answers, $_POST['answer']);
        }
        function AddToArrayAndSession($answers, $newitem){
            array_push($answers, $newitem);
            $_SESSION['antwoorden'] = $answers;
            $_SESSION['index']++;
            if ($_SESSION['index'] >= 20) {    
                    header('location:resultaten.php');
            }
        }
        function AddToArrayAndSessionsom($sommen, $som){
            array_push($sommen, $som);
            $_SESSION['sommen'] = $sommen;
        }
?>
</div>
</div>
</body>
</html>