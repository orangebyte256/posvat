<?php

include 'functions.php';

$num = -1;
for($i = 0; $i < 5; $i++)
{
	if(md5($i) == $_GET["id"])
	{
		$num = $i;
		break;
	}
}


if($num == -1)
	header("Location: index.php");

?>

<!doctype html>
<html>

	<head>
        <meta charset="utf-8">	
		<title>Посвягафитфия2015</title>
		<link rel="stylesheet" href="style.css">		
	</head>
	
	<body>
	<p size=5 style="margin: 2cm 8cm 3cm 8cm;">
	<?php
		echo file_to_text(get_task_num($num));
	?>
	</font>
</body>
</html>
