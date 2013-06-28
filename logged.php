<?php
			//Start session
			session_start();
			session_regenerate_id();
			// var_dump(isset($_SESSION['SESS_FIRST_NAME']));

			if(!isset($_SESSION['SESS_FIRST_NAME'])){
				// var_dump("bbb");
				header("location: #login");
				

			}
			// var_dump("aaa"); 
			?>

<p>I'm logged</p>
<script type="text/javascript">
// console.log($("#aFirst").attr("href","php/#logout"));
// console.log($("#registration a[href='#reg']"));
$("#aFirst").text("Изход");
$("#aFirst").attr("href","#login");


$("#aSecond").text("Моят профил");
$("#aSecond").attr("href","#users");


// $("li.change").first().text("Мои снимки");
// $("li.change").first().text("Мои албуми");
// $("li.change").first().text("Добави снимка");
// $("li.change").first().text("Добави албум");

// $("#leftSide").children("li").children("a").first().text("Мои снимки");
// $("#leftSide").children("li").children("a").next().text("Мои албуми");
// $("#leftSide").children("li").children("a").next().text("Добави снимка");
// $("#leftSide").children("li").children("a").next().text("Добави албум");


</script>