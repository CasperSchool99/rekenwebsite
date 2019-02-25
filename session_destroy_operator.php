<?php
$groep = 0;
$groep = $_GET['groep'];
session_destroy();
session_start();
$_GET['groep'] = $groep;


header("location:operator.php?groep=<?php $groep ?>");
?>