<!DOCTYPE html>
<html>
<head>
	<title>exersices</title>

	<link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>

<h1><center>Ready.. Set.. Fight!</center></h1>

<h4>You're gonna Keep Blocking and Fighting until you get a 3 hit Combo!</h4>

	<?php 
	require_once("classes/ini.php");

	// $honda= new Car();

	// $honda->color= "red";
	// $honda->model= "s2000";
	// $honda->doors= 2;
	// $honda->wheels= 4;
	// $honda->seats= 2;

	// $honda->showOff($honda->color, $honda->model, $honda->doors, $honda->wheels);

	// $honda->delimiter1();

	// $honda->available_seats(1);

	// if ($honda->available_seats1(1)) {
	// 	echo "too many passangers";
	// } else {
	// 	echo "Take your seat";
	// }

	// var_dump($honda->available_seats1(2));

	// $l= LOWGRADE;
	// var_dump($l);


	//echo money_format("$%n", $honda->gallons_and_tanks(8));

	//$honda->drive_by(9);

	//$nerd= new Nerd();

	//echo $nerd->graduate(59);

	//$test2= "hello";

	//Nerd::test2(5 + 7);

	// $var= array("toy", "plastic", "doll");

	// var_dump($var);

	// echo "<br>";

	// $var2= [
	// 	'toy'=>'toy value',
	// 	'plastic',
	// 	'doll'
	// ];

	// var_dump($var2);
	// echo "<br>";

	// echo $var2[1];
	// echo "<br>";
	// echo $var2['toy'];





	$hits= 0;
	$blocked= 0;
		while ($hits < 3) {
			$block= rand(0,1);
			$blocked ++;
			
			if ($block) {
				$hits ++;
				echo "<div class\"hits\">Good Hit!</div>";
				
			} else{
				$hits= 0;
				echo "<div class\"hits\">Block More Nigga!</div>";
			}
		}
		echo "<p>It Took {$blocked} Chances For a PerFect Hit Combo!</p>";

	

	?>
</h4>

</body>
</html>