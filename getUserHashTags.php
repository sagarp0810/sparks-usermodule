<?php
	require_once('dbConnect.php');
	$hashtag = $_GET['hashtags'];

	$sql = "select * from user where HashTags LIKE '%{$hashtag}%'";
	$result = mysqli_query($conn,$sql);
	$rows = array();

	while($r = mysqli_fetch_assoc($result))
	{
		$rows[] = $r;
	}

	print(json_encode($rows));
?>
