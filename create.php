<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "employees";

	$conn = mysqli_connect($hostname, $username, $password, $dbname);

	if(!$conn){
		echo "error";
	}

	$fname = $_POST["first_name"];
	$lname = $_POST["last_name"];
	$email = $_POST["email"];

	$sql = "INSERT INTO users (firstname, lastname, email)
			VALUES ('$fname','$lname','$email')";

	if(!mysqli_query($conn, $sql)){
		echo "Query error";
	}else {
		echo "Insert successful";
	}
	
?>