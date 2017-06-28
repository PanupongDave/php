<?php 

class Car {

	static $wheels = 4;
	public $hood = 1;
	private $engine = 5;
	var $doors = 4;

	
	function __construct(){
		$this->wheels = 10;
		$this->doors = 8;
	}

	function MoveWheels(){
		Car::$wheels = 10;
	}

	static function MoveHood(){
		$hood = 5;
		return $hood;
	}
	
}

Car::MoveWheels();
echo Car::$wheels;

echo Car::MoveHood();











?>