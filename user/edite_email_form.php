<?php
session_start();
include("../conect.php");
?>

<meta charset="utf-8">
<link href="../css/main.css" rel="stylesheet" type="text/css">
<div class ="login">
	<h1>Введіть новий емейл</h1>
	<form name="loginform" id="loginform" action="scripts/current_user_controler.php" method="POST">
		<p>
			<label for="user_login">E-mail<br />
				<input type="text" name="email" id="login" class="input" value="" size="20" /></label>
		</p>
		<p>
			<label for="user_login">Введіть пароль для підтвердження<br />
				<input type="password" name="password" id="login" class="input" value="" size="20" /></label>
		</p>
		<p>
			<label for="user_pass">Повторіть пароль<br />
				<input type="password" name="r_password" id="login" class="input" value="" size="20" /></label>
		</p>
		<p class="submit">
			<input type="submit" name="edite_email_conf" class="button" value="Змінити емейл" />
		</p>

	</form>

</div>