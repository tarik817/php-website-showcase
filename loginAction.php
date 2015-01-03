<?php
session_start();
include("conect.php");

echo session_name();

if(isset($_POST['enter_go'])){
	if(!empty($_POST['login']) && !empty($_POST['password'])) {
	$login= $_POST['login'];
	$password=$_POST['password'];

	$query= mysqli_query ($conect, "SELECT * FROM users WHERE user = '".$login."'") or die (mysqli_error());
	$user_data= mysqli_fetch_array($query);
	//Для прикладу встановлений логін і пароль адміністратора
	$admin_login = 'admin';
	$admin_pass = 'admin';
	
	if($password == $admin_pass and $login == $admin_login)	{
		$_SESSION['session_username']=$admin_login;
//Перенаправлення на сторінку адміна
// додати посилання
		header("Location: user/userView.php");

	}
	elseif($user_data['password']== md5($password)){
		

    $_SESSION['session_username']=$login;
    

    /* Перенаправленян на сторінку користувача */
    header("Location: user/userView.php");
   
	}else{
		?><script>alert("Паролі повинні співпадати.")</script><?php

	}
}
}
?>