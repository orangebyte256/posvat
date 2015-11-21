<?php

include 'functions.php';

if(! is_numeric($_GET["first"]))
{
	header("Location: index.php");
}

$name = get_name($_GET["first"]);
if(! is_belong($name, "./active_students.txt"))
{
	header("Location: index.php");
}

if(! is_numeric($_GET["second"]))
{
	header("Location: index.php");
}

$name = get_name($_GET["second"]);
if(! is_belong($name, "./active_students.txt"))
{
	header("Location: index.php");
}

if($_GET["second"] == $_GET["first"])
{
	header("Location: index.php");
}

?>

<!doctype html>
<html>

	<head>
        <meta charset="utf-8">	
		<title>Посвягафитфия2015</title>
		<link rel="stylesheet" href="style.css">		
	</head>
	
	<body>	
		<div id="main" style="position:absolute; z-index: 1000; margin-top: 50px; background-color: #000000; width: 600px; height: 300px; opacity: 0.95;">
		<div style="margin-top: 20px; margin-left: 20px; margin-right: 20px; margin-bottom: 20px; line-height: 22px; ">
		<font id="text_task" color="green">	&emsp; &emsp;Ребята, данные даются вам в <font color="red">stdin</font> поток, и ожидается, что выводить вы будете в <font color="red">stdout</font>. Ответом на задачу будет <font color="red">просто число</font>, не нужно ставить никаких пробелов, переносов строки или символов возврата каретки, иначе ваша задача просто не пройдет.
		Как вы уже прочитали, язык программирования только СИ, причем <font color="red">C89</font>! В основном задачи решаются, без знания длинны/колличества строк, но если вам все же понадобится считать в какой-то буфер, можете использовать размер 32768<br>
</font>
		<center><font id="text_link">
		<a href="./task.php?id=<?php echo md5(get_task_num($_GET["first"])); ?>" onclick="this.target='_blank';" style="color:green; font-size:140%;">условие задачи</a>
		</font></center>
		</div>
		<center>
		<form action="test.php" enctype="multipart/form-data" method="POST">
		<input type="file" name="datafile" size="40">
		<input type="hidden" name="first" value=<?php echo $_GET["first"]; ?>>
		<input type="hidden" name="second" value=<?php echo $_GET["second"]; ?>>
		<input type="hidden" name="task" value=<?php echo get_task_num($_GET["first"]); ?>>
		<input type="submit" value="Send">
		</form>
		<font size="5" color="red"><br><?php echo $_GET['result'] ?></font>
		</center>
		</div>
		<canvas id="canvas"></canvas>
		<script src="stats.min.js"></script>
		<script src="script.js"></script>

	</body>
	
</html>
