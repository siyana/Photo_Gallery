<?php

if(!$_POST['page']) die("0");

$page = $_POST['page'];
// var_dump($page);

if(file_exists('../'.$page.'.html' )){
	echo file_get_contents('../'.$page.'.html');
	// var_dump('../'.$page.'.html');
}else if(file_exists('../'.$page.'.php')){
	echo file_get_contents('../'.$page.'.php');
}

else echo 'There is no such page!';

