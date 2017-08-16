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

	
// STRINGS / SUBTRINGS

		$my_name= "UMBEr";

	    $sub_name= substr($my_name, 0, 3);
	    
	    // and print it to the screen!

	    $upper_name= strtoupper("umbeR");

	    //echo $upper_name;

	    $lower_name= strtolower("UMBeR");

	    // echo $lower_name;	    

?>
<?php

// STRING POSSITION strpos();
		 

// Print out the position of a letter that is in
// your own name
    $pos= strpos("UmbEr", "b");
    echo $pos;
?>
    </p>
    <p>

<?php
// Check for a false value of a letter that is not
// in your own name and print out an error message
    if (strpos("UmbEr", "w") === false) {
    echo "sorry but, 'w' was not found in UmbEr";
    }
?>
    </p>

<p>

<?php
// round() Number

$round= round(M_PI);
		echo $round;
		echo "<br>";

// round(); Number to an Integer
$round_decimal= round(M_PI, 10);
		echo $round_decimal;

?>
</p>

<p>
<?php
//USING THE rand() FUNCTION .. Use rand() to print a random number to the screen
    echo rand(0, 5);
    ?>
    </p>
    
    <p>
<?php
// Use your knowledge of strlen(), substr(), and rand() to
// print a random character from your name to the screen.
    $name= "umber";
    $print= substr($name, rand(0, strlen($name) - 1), 1);
    echo $print;
   
?>
    </p>

<p>
	<?php
	// Create an array and push 5 elements on to it, then 
    // print the number of elements in your array to the screen
    $girls= array();
        array_push($girls, "Samantha");
        array_push($girls, "Carolline");
        array_push($girls, "Pepper");
        array_push($girls, "Mandy");
        array_push($girls, "Dolores");
    echo count($girls);

	?>
</p>



<p>
<?php
	// Create an array with several elements in it, 
	// then sort it and print the joined elements to the screen
	$the_array= array(5, 3, 7, 4);
	sort($the_array);
    echo join(", ", $the_array);
?>
</p>


<p>
<?php
	// Reverse sort your array and print the joined elements to the screen
    $array2= array(2, 233, 33, 4);
    rsort($array2);
    echo join(":, ", $array2);
?>
</p>





<p>
	<?php
	// Create an array and push on the names
    // of your closest family and friends
    $friends= array("Mystical", "Marissa", "Misty", "Beth", "Jenney");
    	array_push($friends, "Julie", "Timma", "Melly", "Penny", "Serra");
	// Sort the list

    //sort($friends);

    // Print the List
	echo "<ol>";
	foreach ($friends as $girls) {
		echo "<li>".$girls."</li>";
	};
	echo "</ol>";

	// Randomly select a winner!
	$ppl= count($friends);
	$pick= rand(0, $ppl);

	// Print the winner's name in ALL CAPS
	$winner= strtoupper($friends[$pick]);
	echo "<p><strong>" .$winner. "</strong> is the Winner!</p>";
	?>
</p>



<!-- HOW TO INDICATE NAMES OF A FUNCTION insensitive -->
<p>
<?php
  	// Here we define the function...
  	function hello_world() {
    	echo "HelloWorld!";
    	echo "<br>";
  	}
  
  	// ...and here we call it!
  	hello_world();
  	hello_world();
  	hello_world();

?>
</p>

<p>
<?php
	function my_name() {
		echo "Umber will be the best!";
		echo "<br>";
	}
	my_name();
	my_name();
?>
</p>



<!-- HOW TO RETURN A VALUE USING the return SYNTAX -->
<p>
<?php
	function return_name() {
		return;
	}
	
?>
</p>


<!-- HOW TO COMPOSE A STRING USING CONCATENATION -->
<p>
<?php
	function greetings($name) {
    	echo "Greetings, " . $name . "!";
	}
	
	$n= "Umber";
	greetings($n);

?>
</p>

<p>
<?php
// The code below creates the class
class Person {

    // Creating some properties (variables tied to an object)
    public $isAlive = true;
    public $firstname;
    public $lastname;
    public $age;
    
    // Assigning the values
    public function __construct($firstname, $lastname, $age) {
      $this->firstname= $firstname;
      $this->lastname= $lastname;
      $this->age= $age;
    }
    
    // Creating a method (function tied to an object)
    public function greet() {
      return "Hello, my name is " .$this->firstname. " " .$this->lastname. ". And I am " .$this->age. " years old. Very nice to meet you! :-) ";
    }

    public function greet2() {
    	return "And my name is " .$this->firstname. " " .$this->lastname. ". And I am " .$this->age. " years old. A pleasure in meeting you too! :) .";
    }
  }
  
// Creating a new person called "boring 12345", who is 12345 years old ;-)
	$me= new Person('Boring', 'James', 12345);
	$friend= new Person('Umber', 'Drinks', 25);

// Printing out, what the greet method returns
			echo $me->greet();
			echo "<br>";
			echo $friend->greet2();


?>
</p>



<p>
<?php
	// Reconstructing the class Person{}
    class Human {

    // Adding properties
    	public $is_alive= true;
    	public $first_name;
    	public $last_name;
    	public $age;

    // Creating a constructor for these OBJECTS/PROPERTIES
    	public function __construct($first_name, $last_name, $age){
    		$this->first_name= $first_name;
    		$this->last_name= $last_name;
    		$this->age= $age;
    	}



    }
    
    // Creating two instances of class Person{}
    $teacher= new Human("Pincita ", "Cabron, ", 30);
    $student= new Human("Umber ", "Torres, ", 25);

    // echo $teacher from class Human() -> is_alive;
    echo $teacher->first_name;
    echo $teacher->last_name;
    echo $teacher->age;
    echo "<br>";
    echo $student->first_name;
    echo $student->last_name;
    echo $student->age;

?>
</p>





</body>
</html>