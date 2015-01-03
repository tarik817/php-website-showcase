<?php
if(isset ($_POST['news_go'])){
	$username= $_POST['username'];
	$password= $_POST['password'];
	$r_password= $_POST['r_password'];
	$email = $_POST['email'];

	if($password != $r_password){
		exit("Паролі повині збігатися");
	}
	if(strlen($username)<3 or strlen($username) > 15)
	{
		exit("Лонін повинен бути більшим ніж 3 символи і меншм ніж 15");
	}
	if(!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i",$email))
	{
		exit ("Невірна пошта");
	}

	$username = htmlspecialchars($username);
	$password = htmlspecialchars($password);
	$email = htmlspecialchars($email);

	$username = trim($username);
	$password = trim($password);
	$email = trim($email);


	$q = mysqli_query($conect, "SELECT user FROM users WHERE user='$username'") or die(mysqli_error());
	$r = mysqli_fetch_array($q);
	if(!empty($r['user']))
	{
		exit("Такий логін вже є");

	}
	$q2 = mysqli_query($conect, "SELECT email FROM users WHERE email='$email'") or die(mysqli_error());
	$r2 = mysqli_fetch_array($q2);
	if(!empty($r2['email']))
	{
		exit("такий E-mail вже є.");
	}
	$password=md5($password);
	$date = time();
	$save_user = mysqli_query($conect, "INSERT INTO users VALUES('','$username', '$password', '$email', '$date')");

	if($save_user==true)
	{
		echo "<html><head><meta http-equiv='Refresh' content='0; URL=index.php'></head></html>";
	}else{
		echo "Користувач не зареєстрований";
	}
}

?>