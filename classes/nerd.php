<?php 

class Nerd {

	public $graduate;
	public $school;
	public $age;
	public $gpa;
	public $course;


	public function graduate($credits){
		if ($credits >= 60 && $credits <= 75) {
			echo "CONGRATS YOU PASS";
		} else if ($credits > 75){
			echo "VALID VICTORIAN";
		} else {
			echo "TRY HARDER";
		}
	}

//HEREDOC
	public function test_delimeter($test){
		echo<<<TEST
		When i was born, i was born with $test third leg
TEST;
	}

	public static function test2($test2){
		echo $test2;
	}




} //END OF CLASS






?>