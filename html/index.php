<?php

include 'functions.php';

logging("index.php");

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
		<div style="margin-top: 20px; margin-left: 20px; margin-right: 20px; margin-bottom: 20px; line-height: 22px;"><font face="arial, veranda" id="text" size="5" color="green"></font>
		</div>
		<center>
		<form id = "form" method = "GET" style = "visibility: hidden;" action = "game.php">
		    <select required size = "1" name = "id" style="background-repeat: no-repeat; background-position: right center; padding-right: 20px; color: black; ">
			<?php
			make_select("./active_students.txt");
			?>
		    </select>
		    <input type = "submit" value = "Ok">
		</form>
		</center>
		</div>
		<script src="Animator.js" type="text/javascript" encoding="UTF-8"></script>
		<script type="text/JavaScript">
		var animator = new Animator("Тук-тук.<br> Признайся, тебя все время терзали мысли, что что-то идет не так: ты учишь все эти предметы, но по-настоящему не чувствуешь себя студентом? Давай, я расскажу тебе, что нужно для этого сделать. Ну так что, готов узнать, насколько глубока кроличья нора?<br>Кто ты?", 50, "text", "form");
		animator.run(function() {});
		</script>
		<canvas id="canvas"></canvas>
		<script src="stats.min.js"></script>
		<script src="script.js"></script> 
	</body>

</html>
