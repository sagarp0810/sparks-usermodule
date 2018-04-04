<?php
	$config = parse_ini_file("config.ini");

	$conn = mysqli_connect($config['HOSTNAME'],$config['USERNAME'],$config['PASSWORD'],$config['DBNAME']);
	if(!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
?>
