<?php

	
	//connect
	$mysqli =  new mysqli("localhost", "root", "", "photogallery");
 	//check connection
	if ($mysqli->connect_errno) {
	    die("Failed to connect to MySQL: " 
	    		. $mysqli->connect_error);
	}

	$mysqli -> query("SET NAMES UTF8");

