<?php
session_start();
include("../conect.php");
?>

<meta charset="utf-8">
<link href="../css/main.css" rel="stylesheet" type="text/css">
<div class ="login">
	<h1>Реєстрація</h1>
	<form name="loginform" id="loginform" action="scripts/registration_action.php" method="POST">
		<p>
			<label for="user_login">Логін<br />
				<input type="text" name="username" id="login" class="input" value="" size="20" /></label>
		</p>
		<p>
			<label for="user_login">E-mail<br />
				<input type="text" name="email" id="login" class="input" value="" size="20" /></label>
		</p>
		<p>
			<label for="user_login">Пароль<br />
				<input type="password" name="password" id="login" class="input" value="" size="20" /></label>
		</p>
		<p>
			<label for="user_pass">Повторіть пароль<br />
				<input type="password" name="r_password" id="login" class="input" value="" size="20" /></label>
		</p>
		<p class="submit">
			<input type="submit" name="news_go" class="button" value="Зареєструватись" />
		</p>

	</form>

</div>
		