<?php 

class Car {

	var $wheels = 4;
	var $hood = 1;
	var $engine = 1;
	var $doors = 4;

	
	function __construct(){
		$this->wheels = 10;
		$this->doors = 8;
	}

	function getThing($message){
		if( $message == "wheels"){
			echo $this->wheels;
		}
		else if( $message == "hood"){
			echo $this->hood;
		}
		else if( $message == "engine"){
			echo $this->engine;
		}
		else if( $message == "doors"){
			echo $this->doors;
		}
	}

}

$truck = new Car();

$truck->getThing("doors");









?>