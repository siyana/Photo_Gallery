
<?php
			//Start session
			session_start();
			session_regenerate_id();
			// var_dump(isset($_SESSION['SESS_FIRST_NAME']));

			if(!isset($_SESSION['SESS_FIRST_NAME'])){
				// var_dump("bbb");
				header("location: login.php");
				

			}
			// var_dump("aaa"); 
			?>
<!DOCTYPE html>
<html>
	
		<head>
			<meta charset='utf-8'>
			<link rel="stylesheet" type="text/css" href="css/style.css">
			<title>Photo Gallery</title>
		</head>
		<body>
			
			<div id="wrapper">
			<header id="mainHeader">

				<ul id="registration">
					<li><a href="php/logout.php">Изход</a></li>
					<li><a href="login.php">Моят профил</a></li>					
				</ul>
				<nav>	
					<ul id="topMenu">
						<li><a href="#">Потребител</a></li>
						<li><a href="#">Албуми</a></li>
						<li><a href="#">Снимки</a></li>
						<li><a href="#">Начало</a></li>	
					</ul>
			</nav>
			</header>

			

			<aside>
				<ul id="leftSide">
					<li><a href="#">Текст</a></li>
					<li><a href="#">Текст</a></li>
					<li><a href="#">Текст</a></li>
					<li><a href="#">Текст</a></li>		
				</ul>
			</aside>

			<section >
				<!-- <img id="arrowleft" src="img/arrowleft.png" alt="arrow">
				<img id="arrowright" src="img/arrowright.png" alt="arrow"> -->
				<!--  <a class="hiddenanchor" id="toregister"></a>
    			<a class="hiddenanchor" id="tologin"></a> --> -->

				<article id="main">
					<img id="logo" src="img/gal2.png" alt="logo">
					
					
		
					
					
				</article>
			</section>

			<footer>
				<p id="copyright">'Copyright'</p>
			</footer>
		</div>
	<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	</body>
	</html>	