<?php 
    session_start();

    if (!isset($_SESSION['viewed'])) {
        $_SESSION['viewed'] = 0;
        $_SESSION['array'] = 0;
        $_SESSION['index'] = 0;
    }
    if ($_SESSION['viewed'] == 0) {
        $_SESSION['viewed'] = 1;
    }
    echo"
        <form method='post'>
            <label for='answer'>  <label>
            <input type='text' name='answer'>
        
            <input type='submit' name='submit' value='submit'>
        </form>
    ";
            if ($_SESSION['array'] == ""){
                $answers = array();
                $_SESSION['array'] = $answers;
            }else{
                $answers = $_SESSION['array'];
            }

        if (isset($_POST['submit'])){
            $_SESSION['answer'] = $_POST['answer'];

            AddToArrayAndSession($answers, $_POST['answer']);

        }
        function AddToArrayAndSession($answers, $newitem){
            if ($_SESSION['index'] >= 20) {
                header('location:resultaten.php');
            }else{
            array_push($answers, $newitem);
            $_SESSION['array'] = $answers;
            header('Refresh:0');
            $_SESSION['index']++;
            }
            
        }
        var_dump($_SESSION['array']);

    foreach ($answers as $answer) {
        print '<br/> ';
        print $answer;
    }

?>