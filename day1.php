<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
	<style>
		#centered {
			display: flex;
			justify-content: center;
			margin-top: 20%;
		}
	</style>
</head>
<body>

	<!--Exercise1-->
	<?php  
		$myname = "Bálint Bolla";
		echo ("<div id=\"centered\">
					<h1>Hello my name is:<br> $myname</h1>
				</div>");
	?>

	<!--Exercise2-->
	<br>
	<?php
		$d=date("D");
		if ($d=="Mon" )
		echo "Happy Monday!";
		else
		echo "Have a nice day!" ;
	?>

	<!--Exercise3-->
	<br>
	<?php 
		$d=date("D");
		switch ($d) {
			case 'Mon':
				echo "<br>Today is monday!";
				break;
			case 'Tue':
				echo "<br>Today is tuesday!";
				break;
			case 'Wed':
				echo "<br>Today is wednesday!";
				break;
			case 'Thu':
				echo "<br>Today is thursday!";
				break;
			case 'Fri':
				echo "<br>Today is friday!";
				break;
			case 'Sat':
				echo "<br>Today is saturday!";
				break;
			case 'Sun':
				echo "<br>Today is sunday!";
				break;

			default:
				echo "<br>What day is today?";
		}
	?>

	<!--Exercise4-->
	<br>
	<?php 
		echo "<br>";
		for($i=0; $i<50; $i++)
		{
			echo("I'm Bálint <br>");
		}

		$i = 0;
		while ($i < 10) {
			$i ++;
			echo "I'm Bálint and you can see this until i=10 (i = $i) <br>";
		}

		$i = 0;
		do {
			$i++;
		} while ($i<10);
		echo "Still Bálint here, and you can see this until i=10 (i=$i)";
	?>

	<!--Exercise5-->
	<br>
	<?php
		$array = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
		foreach( $array as  $value )
		{
 		if( $value == 0 ) continue ;
 		echo "<br>Value is $value <br />";
		}
	?>
	
	<!--Exercise6-->
	<br>
	<?php
		$characters = array(
			"Mickey" => array
			(
			"species" => "mouse",
			"gender" => "male",
			"family" => "Minnie, Pluto"
			),
			"Minnie" => array
			(
			"species" => "mouse",
			"gender" => "female",
			"family" => "Mickey, Pluto"
			),
			"Pluto" => array
			(
			"species" => "dog",
			"gender" => "male",
			"family" => "Minnie, Mickey"
		)
		);

		echo "<h2>Mickey Mouse</h2> <br>";
		echo "<img src=\"img/mickey.jpg\"><br>";
		echo "species: ";
		echo $characters["Mickey"]["species"] . "<br>";
		echo "gender: ";
		echo $characters["Mickey"]["gender"] . "<br>";
		echo "family: ";
		echo $characters["Mickey"]["family"] . "<br>";

		echo "<h2>Minnie Mouse</h2> <br>";
		echo "<img src=\"img/minnie.png\"><br>";
		echo "species: ";
		echo $characters["Minnie"]["species"] . "<br>";
		echo "gender: ";
		echo $characters["Minnie"]["gender"] . "<br>";
		echo "family: ";
		echo $characters["Minnie"]["family"] . "<br>";

		echo "<h2>Pluto</h2> <br>";
		echo "<img src=\"img/pluto.jfif\"><br>";
		echo "species: ";
		echo $characters["Pluto"]["species"] . "<br>";
		echo "gender: ";
		echo $characters["Pluto"]["gender"] . "<br>";
		echo "family: ";
		echo $characters["Pluto"]["family"] . "<br>";
	?>

</body>
</html>