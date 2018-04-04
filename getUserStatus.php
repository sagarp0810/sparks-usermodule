<?php
	require_once('dbConnect.php');
	$status = $_GET['status'];
	$statuses = array('Active', 'Inactive', 'DELETE', 'New');

	if(!in_array($status, $statuses))
	{
		die("Invalid status");
	}

	$sql = "select * from user where Status ='".$status."'";
	$result = mysqli_query($conn,$sql);
	$rows = array();

	while($r = mysqli_fetch_assoc($result))
	{
		$rows[] = $r;
	}
	
	print(json_encode($rows));
?>
