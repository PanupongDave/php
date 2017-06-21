<?php 
	///////////////-*-*- Connection to Mysql Code-*-*-*-*///////////////
	$connection = mysqli_connect('localhost', 'root','' , 'loginapp');//
																	  //
	if(!$connection){												  //
		die("Database connection fail");                              //
	}																  //	
	////////////////////////////////////////////////////////////////////


