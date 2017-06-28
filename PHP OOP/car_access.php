<?php 

class Car {

	public $wheels = 4;
	protected $hood = 1;
	private $engine = 5;
	var $doors = 4;

	
	function __construct(){
		$this->wheels = 10;
		$this->doors = 8;
	}

	





}

class Plane extends Car {
	function showEngine(){
		$engine = $this->engine;
		return $engine;
	}
	function showHood(){
		$hood = $this->hood;
		return $hood;
	}
}

$truck = new Plane();

echo $truck->showEngine();

echo "<br>";











?>