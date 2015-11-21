<?php

include 'functions.php';

if($_POST["first"] == "" || $_POST["second"] == "" || $_POST["task"] == "")
	header("Location: index.php");

function clear($file, $first, $second)
{
	$contents = file_get_contents($file);
	$contents = str_replace(get_name($first), '', $contents);
	$contents = str_replace(get_name($second), '', $contents);
	file_put_contents($file, $contents);
}

$basedir = '/var/www/uploads/test/';
$uploaddir = $basedir . "task_" . $_POST["task"] . "/";
$uploadfile = $uploaddir . $_POST["first"] . "_" . $_POST["second"] . "_source.c";
session_start();

if (move_uploaded_file($_FILES['datafile']['tmp_name'], $uploadfile)) 
{
	$run_name = "sudo " . $basedir . "test.sh " . $_POST["first"] . "_" . $_POST["second"] . " " . $basedir . "task_" . $_POST["task"];
	$clear_name = $basedir . "clear.sh " . $_POST["first"] . "_" . $_POST["second"] . " " . $basedir . "task_" . $_POST["task"];
	$result = exec($run_name);
	exec($clear_name);
	if($result == "success")
	{
		$_SESSION['status'] = "success";
		
		clear("./active_students.txt", $_POST["first"], $_POST["second"]);
		clear("./active_fija_students.txt", $_POST["first"], $_POST["second"]);
		clear("./active_fit_students.txt", $_POST["first"], $_POST["second"]);
		$str = get_name($_POST["first"]) . get_name($_POST["second"]) . date('l jS \of F Y h:i:s A') . "\n";
		file_put_contents("./completed_students.txt", $str, FILE_APPEND);
		header("Location: win.php");
	}
	else
	{
		$first = (string)$_POST["first"];
		$second = (string)$_POST["second"];
		header("Location: send_task.php?result=" . $result . "&first=" . $first . "&second=" . $second);
	}
} else {
	$first = (string)$_POST["first"];
	$second = (string)$_POST["second"];
	header("Location: send_task.php?result=" . "Can't load file.Try again later..." . "&first=" . $first . "&second=" . $second);
}
?>
