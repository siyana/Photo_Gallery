<?php
require_once "database_config.php";
	
	

	$nickName=mysql_real_escape_string($_POST["nickName"]);
	
	$name=mysql_real_escape_string($_POST["name"]);

	$email=mysql_real_escape_string($_POST["email"]);

	$password=mysql_real_escape_string(md5($_POST["password"]));

	$pass2=mysql_real_escape_string(md5($_POST["password2"]));
	if($password!=$pass2){
		die('Wrong password');
	}

	$info=mysql_real_escape_string($_POST["info"]);

	$check="SELECT COUNT(id) AS count 
			FROM user 
			WHERE nick_name = '$nickName'";

	$res = $mysqli -> query($check);

	while (($count = mysqli_fetch_assoc($res)) != null){
		if($count['count'] > 0){
			die('This nick name already exist');;
		}
		else{
			$putInfo="INSERT INTO `user`( `nick_name`, `name`, `email`, `password`, `info`) 
					VALUES ('$nickName','$name','$email','$password','$info')";
				  
			$mysqli -> query($putInfo);
			header("location: ../login.php");
		}
	}


	
	
	

