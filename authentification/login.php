
<meta charset="utf-8">
<link href="../css/main.css" rel="stylesheet" type="text/css">
<div class ="login">
	<h1>ВХІД</h1>
	<form name="loginform" id="loginform" action="scripts/loginAction.php" method="POST">
		<p>
			<label for="user_login">Логін<br />
				<input type="text" name="login" id="login" class="input"  size="20" /></label>
		</p>
		<p>
			<label for="user_pass">Пароль<br />
				<input type="password" name="password" id="password" class="input" size="20" /></label>
		</p>
		<p class="submit">
			<input type="submit" name="enter_go" class="button" value="Log In" />
		</p>
		<p class="regtext">Ви ще не зареєстровані?<a href="registration.php" >Реєстрація тут:)</a></p>
	</form>

</div>


