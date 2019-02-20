<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/btn.css" />
</head>
<body>
<?php
$groep = 0;
$groep = $_GET['groep'];
?>
	<div class="backgroundgroep">
		<div class="sommen">
		<div class="panel purple">
			<a href="main.php?groep=<?= $groep ?>&operator=plus"><button>+ sommen</button></a>
			<a href="main.php?groep=<?= $groep ?>&operator=min"><button>- sommen</button></a>
			<a href="main.php?groep=<?= $groep ?>&operator=keer"><button>x sommen</button></a>
			<a href="main.php?groep=<?= $groep ?>&operator=deel"><button>: sommen</button></a>
			<a href="main.php?groep=<?= $groep ?>&operator=toets"><button>TOETS!</button></a>
		</div>
		</div>
	</div>
</body>
</html>