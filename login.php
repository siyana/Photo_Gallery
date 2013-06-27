
<?php
			//Start session
			session_start();	
			//Unset the variables stored in session
			unset($_SESSION['SESS_MEMBER_ID']);
			unset($_SESSION['SESS_FIRST_NAME']);
			unset($_SESSION['SESS_LAST_NAME']);

?>

			
					<div id="mainForm">
					

					<div id="login" class="animate form">
						<form class="regForm" action="php/session.php" method="POST" autocomplete="on">
							<!-- <h1 id="regTitle">Регистрация</h1>  -->

							<p>
							<label for="nickName" class="labels"  >Потребителско име:</label>
							 <input  type="text" name="nickName" required="required" placeholder="Потребителско име" autofocus>
							</p>
							
							
							
							<p><label for="password" class="labels"  >Парола:</label>
							 <br><input type="password" name="password" required="required" placeholder="Парола"  autocomplete="off"> <br></p>
							
							
							
							
							<p class="logButton button"><input type="submit" value="Вход"></p>


							 <p class="change_link">
                    			Не сте регистриран?
                    			<a href="#reg" class="to_register">Регистрация</a>
                			</p>	
                			<!-- <span id="#res">iohho</span> -->


						</form>
					</div>
					<!-- <div id="register" class="animate form">
						<form class="regForm" action="php/db.php" method="POST" autocomplete="on">
							  

							<p>
							<label for="nickName" class="labels" >Потребителско име:</label>
							 <input id="nickName" type="text" name="nickName" required="required" placeholder="Потребителско име" autofocus>
							</p>
							
							<p><label for="name" class="labels" >Име: </label>
							<br><input type="text" name="name" placeholder="Име"   autofocus> <br></p>
							 
							<p><label for="email" class="labels"  >E-mail: </label>
							<br><input type="email" name="email" required="required" placeholder="Email"   autofocus> <br></p>
							
							<p><label for="password" class="labels"  >Парола:</label>
							 <br><input type="password" name="password" required="required" placeholder="Парола"  autofocus autocomplete="off"> <br></p>
							
							 <p><label for="passwordD" class="labels"  >Повтори паролата:</label>
							 <br><input type="password" name="passwordD" required="required" placeholder="Повтори парола"  autofocus autocomplete="off"> <br></p>
							
							 <p><label for="info" class="labels"  >Допълнителна информация:</label>
							 <br><input type="text" name="info" placeholder="Информация"  autofocus> <br></p>
							<p class="regButton button"><input type="submit" value="Регистрация"></p>					

							<p class="change_link">  
                    			Вече сте регистриран?
                    			<a href="#tologin" class="to_register"> Вход</a>
                			</p>		

						</form>
					</div> -->

					
					</div>
			
			