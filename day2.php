<!DOCTYPE html>
<html>
<head>
	<title>Day2 PHP</title>
	<link rel="stylesheet" type="text/css" href="chrome.css">
	<link rel="stylesheet" type="text/css" href="mozilla.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<!--exercixe1-->
	<?php 
		$viewer = getenv( "HTTP_USER_AGENT" );
		$browser = "An unidentified browser";
		if( preg_match( "/MSIE/i", "$viewer" ) )
		{
		$browser = "Internet Explorer" ;
		}
		else if( preg_match( "/Netscape/i", "$viewer"  ) )
		{
		$browser = "Netscape";
		}
		elseif(preg_match('/Chrome/i' , "$viewer"))
		{
		$browser = 'Google Chrome';
		}
		else  if( preg_match( "/Mozilla/i", "$viewer" ))
		{
		$browser = "Mozilla" ;
		}
		elseif(preg_match('/Safari/i',"$viewer"))
		{
		$browser = 'Apple Safari';
		}
		$platform = "An unidentified OS!";
		if( preg_match( "/Windows/i", "$viewer" ) )
		{
		$platform = "Windows!";
		}
		else if ( preg_match( "/Linux/i", "$viewer"  ) )
		{
		$platform = "Linux!";
		}
		else if  ( preg_match( "/Mac/i", "$viewer" ) )
		{
		$platform = "Mac!";
		}
		echo("<div class=\"container\"><div class=\"row m-5\">
    			<div class=\"col-sm \">
      				You are using:
    			</div>
    		<div class=\"col-sm\">
      				<p class=\"text-success\">$browser on $platform</p>
    		</div>
    		<div class=\"col-sm\">
      			on your computer!
    		</div>
  			</div></div>");
	?>
<!--exercixe2-->
	<div class="container">
		<form action="day2.php" method="post" accept-charset="utf-8">
		  <div class="form-group">
		    <label for="exampleInputName">Name</label>
		    <input type="text" class="form-control" name="name">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputSurname">Surname</label>
		    <input type="text" class="form-control" name="surname">
		  </div>
	  		<input type="submit" class="btn btn-primary" value="Submit" name="submit"></input>
		</form>
	</div>

	<?php
		if(isset($_POST["submit"])){
			$name = $_POST["name"];
			$surname = $_POST["surname"];

			if($name && $surname){
				echo "<div class=\"alert alert-success\" role=\"alert\">
  						<p class=\"text-center\">Welcome $name $surname!</p>
					</div>";

			}
			elseif($name){
				echo "<div class=\"alert alert-danger\" role=\"alert\">
  						<p class=\"text-center\">Please add your Surname as well!</p>
					</div>";
			}
			elseif($surname){
				echo "<div class=\"alert alert-danger\" role=\"alert\">
  						<p class=\"text-center\">Please add your Name as well!</p>
					</div>";
			}
			
		}
	?>
<!--exercixe3-->

	<?php

		function avgCr ($cr1, $cr2, $cr3, $cr4, $cr5, $cr6){
			$result = ($cr1+$cr2+$cr3+$cr4+$cr5+$cr6)/6;
			return "<div class=\"card text-center m-5\" style=\"width: 18rem;\">
  					<div class=\"card-body\">
					    <h5 class=\"card-title\">The result is:</h5>
					    <p class=\"card-text\">$result</p>
  					</div>
				</div>";
		}

		$grade = avgCr(105,106,100,90,100,100);
		echo $grade;
	?>

<!--exercixe4-->
	
	<?php

		$hostName = "localhost";
		$userName = "root";
		$password = "";
		$dbName = "employees";

		$conn = mysqli_connect($hostName, $userName, $password, $dbName);

		/*
		if(!$conn){
			echo "Something went wrong!";
		}else{
			echo "Okay, everything works!";
		}
		*/
	# exercise 5
		/*
		$sql = "CREATE TABLE Users (
				user_id INT(6) AUTO_INCREMENT PRIMARY KEY,
				firstname VARCHAR(20) NOT NULL,
				lastname VARCHAR(20) NOT NULL,
				email VARCHAR(50),
				reg_date TIMESTAMP
				)";

		mysqli_query($conn, $sql);
		*/
	# exercise 6

		$sql = "INSERT INTO users (firstname, lastname, email)
				VALUES ('John', 'Doe', 'john@doe.com')";

		if(mysqli_query($conn, $sql)){
			echo "success";
		}else{
			echo "error";
		}

	?>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>