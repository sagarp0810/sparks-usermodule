<?php
	require_once('dbConnect.php');
	$pgNo = $_GET['pageNumber'];
	$pageSize = $_GET['pageSize'];

	if (!is_numeric($pgNo) || !is_numeric($pageSize) || $pgNo<0 || $pageSize<0)
	{
		die('Invalid Input.Please Enter Numeric data greater than 0');
	}

	$limit = $pageSize;
	$offset = $pageSize*($pgNo-1);

	$sql = "select * from user LIMIT $limit OFFSET $offset";
	$result = mysqli_query($conn,$sql);
	$rows = array();
	
	while($r = mysqli_fetch_assoc($result))
	{
		$rows[] = $r;
	}

	print(json_encode($rows));
?>
