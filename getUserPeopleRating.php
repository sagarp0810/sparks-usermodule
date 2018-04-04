<?php
	require_once('dbConnect.php');
	$rating = $_GET['ratings'];

	if(!is_numeric($rating))
	{
		die('Enter Numeric data');
	}

	$sql = "select * from user where PeopleRatings ='".$rating."'";
	$result = mysqli_query($conn,$sql);
	$rows = array();

	while($r = mysqli_fetch_assoc($result))
	{
		$rows[] = $r;
	}
	
	print(json_encode($rows));
?>
