<?php 

class Car {

	function MoveWheels(){
		echo "Wheels move";
	}
}

/**
 *  class_exists("class","mothod")
 */
if(class_exists("Car")){
	echo "Class Car Exist";
} else {
	echo "No";
}


?>