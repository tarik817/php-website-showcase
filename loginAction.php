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

	if($user_data['password']== md5($password)){
		

    $_SESSION['session_username']=$login;
    

    /* Перенаправленян на сторінку користувача */
    header("Location: user/userView.php");
   
	}else{
		?><script>alert("Паролі повинні співпадати.")</script><?php

	}
}else{//для перевірки
	echo "Данні не передаються!";
}
}
?>