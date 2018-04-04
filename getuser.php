<?php
	$config = parse_ini_file('../config.ini');

	if(isset($_GET['createdAfter'])){

		$createdAfter = $_GET['createdAfter'];
		$conn = new mysqli($config['DBHOST'], $config['DBUSER'], $config['DBPASS'], $config['DBNAME']);
		$arr = array();

		$query = "SELECT first_name, last_name, email FROM fbusers WHERE fbusers.createdDate > '$createdAfter';";
		$result = $conn->query($query);

		while($row= $result->fetch_assoc())
		{
			$name = $row['first_name']." ".$row['last_name'];
			$email = $row['email'];
			$arr1 = array(
			"name" => $name,
			"email" => $email
			);
			
			array_push($arr, $arr1);
		}

		echo json_encode($arr);
	}
?>
