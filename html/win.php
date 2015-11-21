<?php
session_start();
if($_SESSION['status'] != "success")
{
	echo "Не выйдет, читеренок)<br>";
	echo "<a href='index.php'>Попробовать честно</a>";
	exit;
}
//$_SESSION['status'] = "done";
?>
<!doctype html>
<html>

	<head>
        <meta charset="utf-8">	
		<title>Посвягафитфия2015</title>
		<link rel="stylesheet" href="style.css">		
	</head>
	
	<body>
		<div id="main" style="position:absolute; z-index: 1000; margin-top: 50px; background-color: #000000; width: 600px; height: 400px; opacity: 0.95;">
		<div style="margin-top: 20px; margin-left: 20px; margin-right: 20px; margin-bottom: 20px; line-height: 22px;"><font id="text" size="5" color="green"></font>
		</div>
		</div>
		<script src="Animator.js" type="text/javascript" encoding="UTF-8"></script>
		<script type="text/javascript">
		var animator = new Animator("Что же, Вы - молодцы! Вы преодолели первый этап и сможете приступить ко второму. Приходите 28 Ноября в 15:00 к новому СК! Там вас ждут офигенные призы, в том числе заветный АВТОМАТ! ", 50, "text", "text_link");
		animator.run(function(){});		
		</script>
		<canvas id="canvas"></canvas>
		<script src="stats.min.js"></script>
		<script src="script.js"></script>

	</body>
	
</html>
