<?php

include('database_config.php');
	session_start();
	$path = "../upload/";
	$valid_formats = array("jpg", "png", "gif");
	$name=mysql_real_escape_string($_POST['name']);
	$desc=mysql_real_escape_string($_POST['desc']);
	$comment=mysql_real_escape_string($_POST['comment']);

	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
		$name = $_FILES['photoimg']['name'];
		$size = $_FILES['photoimg']['size'];
		if(strlen($name)){
			list($txt, $ext) = explode(".", $name);
			if(in_array($ext,$valid_formats)){
				if($size<(1024*1024))
				{
				$actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
				$tmp = $_FILES['photoimg']['tmp_name'];
				if(move_uploaded_file($tmp, $path.$actual_image_name))
				{

				$mysqli -> query ("INSERT INTO comment (`text`) VALUES ($comment)");
				$mysqli -> query("INSERT INTO photos (`title`, `path`, `description`) 
										VALUES ('$actual_image_name', '$name', '$desc')");
				echo "<img src='upload/".$actual_image_name."'  class='preview'>";  
				}
				else
				echo "failed";
				}
				else
				echo "Image file size max 1024k";    
			}
			else
			echo "Invalid file format..";  
		}
		else
		echo "No file selected";
		exit;
	}

