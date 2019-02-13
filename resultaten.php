<?php
	session_start();

 	function printVar($var) {
    echo '<pre>';
    var_dump($_SESSION['array']); 
    echo '</pre>';
}
?>
