<?php
	require_once('dbConnect.php');
	$role = $_GET['roles'];
	$roles = array('Administrator', 'Mentor', 'Mentee');

	if(!in_array($role, $roles))
	{
		die("Invalid Role");
	}

	$sql = "select * from user where Roles ='".$role."'";
	$result = mysqli_query($conn,$sql);
	$rows = array();

	while($r = mysqli_fetch_assoc($result))
	{
		$rows[] = $r;
	}

	print(json_encode($rows));
?>
