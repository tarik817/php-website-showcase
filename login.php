<?php
session_start();
include("conect.php");

echo session_name();

if(isset($_POST['enter_go'])){
	$login= $_POST['login'];
	$password= md5($_POST['password']);

	$query= mysqli_query ($conect, "SELECT * FROM users WHERE user = '$login'") or die (mysqli_error());
	$user_data= mysqli_fetch_array($query);

	if($user_data['password']== $password){
		echo "<html><head><meta http-equiv='Refresh' content='0; URL=../index.php'></head></html>";
	}else{
		?><script>alert("Паролі повинні співпадати.")</script><?php

	}
}
?>
<meta charset="utf-8">
<link href="../css/main.css" rel="stylesheet" type="text/css">
<div class ="login">
	<h1>ВХІД</h1>
	<form name="loginform" id="loginform" action="" method="POST">
		<p>
			<label for="user_login">Логін<br />
				<input type="text" name="login" id="login" class="input" value="" size="20" /></label>
		</p>
		<p>
			<label for="user_pass">Пароль<br />
				<input type="password" name="login" id="password" class="input" value="" size="20" /></label>
		</p>
		<p class="submit">
			<input type="submit" name="enter_go" class="button" value="Log In" />
		</p>
		<p class="regtext">Ви ще не зареєстровані?<a href="registration.php" >Реєстрація тут:)</a></p>
	</form>

</div>

