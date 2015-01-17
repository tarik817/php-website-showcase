<?php
session_start();
include("../conect.php");
?>

<meta charset="utf-8">
<link href="../css/main.css" rel="stylesheet" type="text/css">
<div class ="login">
	<h1>Зміна паролю</h1>
	<form name="loginform" id="loginform" action="scripts/current_user_controler.php" method="POST">
		<p>
			<label for="user_login">Введіть ваш пароль<br />
				<input type="password" name="old_pass" id="login" class="input" value="" size="20" /></label>
		</p>
		<p>
			<label for="user_login">Введіть новий пароль<br />
				<input type="password" name="password" id="login" class="input" value="" size="20" /></label>
		</p>
		<p>
			<label for="user_pass">Повторіть пароль<br />
				<input type="password" name="r_password" id="login" class="input" value="" size="20" /></label>
		</p>
		<p class="submit">
			<input type="submit" name="edite_pass_conf" class="button" value="Змінити пароль" />
		</p>

	</form>

</div>