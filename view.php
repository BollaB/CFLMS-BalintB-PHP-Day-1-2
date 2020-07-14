<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "employees";

	$conn = mysqli_connect($hostname, $username, $password, $dbname);

	$sql ="SELECT * FROM users";

	$result = mysqli_query($conn, $sql);

	if($result->num_rows == 0){
		echo "No results";
	}elseif($result->num_rows == 1){
		$row = $result->fetch_assoc();
		echo $row["firstname"];
	}else {
		$rows = $result->fetch_all(MYSQLI_ASSOC);
		foreach($rows as $val){
			echo $val["firstname"] . " " . $val["lastname"] . "<br>";
		}
	}
?>