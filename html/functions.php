<?php

function get_name($id)
{
	$handle = fopen("./students.txt", "r");
	$num = 0;
	for ($i = 0; $i <= $id; $i++)
	{
		$line = fgets($handle);
	}
	fclose($handle);
	return $line;
}

function get_id($name)
{
	$handle = fopen("./students.txt", "r");
	$num = 0;
	while (($line = fgets($handle)) !== false) 
	{
		if($line == $name)
		{
			fclose($handle);
			return $num;
		}
		$num = $num + 1;
	}
	return 0;
}

function is_belong($name, $file)
{
	$handle = fopen($file, "r");
	while (($line = fgets($handle)) !== false) 
	{
		if($line == $name)
		{
			fclose($handle);
			return true;
		}
	}
	return false;
}

function is_belong_to_fit($name)
{
	return is_belong($name, "./fit_students.txt");
}

function make_select($name)
{
	$handle = fopen($name, "r");
	if ($handle) 
	{
		while (($line = fgets($handle)) !== false) 
		{
			echo '<option value = "';
			echo get_id($line);
			echo '">';
			echo $line;
			echo "</option>";
 	   	}
		fclose($handle);
	}
}

function file_to_text($num)
{
	$handle = fopen("./task_" . $num . ".txt", "r");
	$result = "";
	if ($handle)
	{
		while (($line = fgets($handle)) !== false) 
		{
			$result = $result . substr($line, 0, strlen($line) - 1) . "<br>";
 	   	}
		fclose($handle);
	}
	return $result;
}

function get_task_num($id)
{
	$task_count = 5;
	return $id % $task_count;
}

function logging($file)
{
	file_put_contents("./log.txt", $file . " " . $_SERVER['REMOTE_ADDR'] . "  " . date('l jS \of F Y h:i:s A') . "\n", FILE_APPEND);	
}

?>
