<?php 

class Car{

	public $wheels;
	public $doors;
	public $seats;
	public $engine;
	public $transmission;
	public $color;
	public $model;

//defined a function with 4 peramiters

	public function showOff($color, $model, $doors, $wheels){
		echo "today, i bought my little brother a ".$color." honda ".$model." with a 4.0
			  engine transmission and it's a ".$doors." car with fat ".$wheels." and seats";
	}

//OPTION #1 USING echo
	public function delimiter(){
			echo<<<DIM
			Hello Mr. Umberto T. How's your day going? Hello Mr. Umberto T. How's your day going?
	 		Hello Mr. Umberto T. How's your day going?	 Hello Mr. Umberto T. How's your day going? Hello Mr. Umberto T. How's your day going? Hello Mr. Umberto T. How's your day going?
DIM;
	}
//OPTION #2 USING $text
	public function delimiter1(){
			$text= <<<DIM
			Hello Mr. Umberto T. How's your day going? Hello Mr. Umberto T. How's your day going?
	 		Hello Mr. Umberto T. How's your day going?	 Hello Mr. Umberto T. How's your day going? Hello Mr. Umberto T. How's your day going? Hello Mr. Umberto T. How's your day going?
DIM;
	echo $text;
	}


	public function available_seats($ppl){
		if ($ppl >= $this->seats) {
			echo "WILL ALL FIT";
		} else {
			echo "CALL UBER";
		}
	}


	public function available_seats1($ppl){
		if ($this->seats >= $ppl) {
			return true;
		} else {
			return false;
		}
	}
								//Paramiter
	public function gallons_and_tanks($gallons){
		return $gallons * LOWGRADE;

	}

	public function drive_by($vatos){
		echo "BRRRRAAATT .. SAID MY ".HARDWARE." AND THERE ".$vatos." Vatos on the GROUND";

	}



} //END OF CLASS








?>