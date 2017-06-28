<?php 

class Car {

	var $wheels = 4;
	var $hood = 1;
	var $engine = 1;
	var $doors = 4;

	function MoveWheels(){
		$this->wheels = 10;
	}

	function CreateDoors(){
		$this->doors = 6;

	}
}








?>