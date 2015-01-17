<meta charset="utf-8">
<?php
if(!isset($_SESSION)){session_start();} 

if(isset($_POST['edite_email'])){
echo "<html><head><meta http-equiv='Refresh' content='0; URL=../edite_email_form.php'></head></html>";
}elseif(isset($_POST['edite_pass'])){
echo "<html><head><meta http-equiv='Refresh' content='0; URL=../edite_pass_form.php'></head></html>";

}elseif (isset($_POST['edite_email_conf'])) {
	if($_POST['password'] == $_POST['r_password']){
		include("current_user_edite_action.php");
		$e= new UserUpdate();
		$check= $e -> check_pass($_POST['password'], $_SESSION['session_username']);
		if($check){
			$r=$e->update_user_email($_POST['email'], $_SESSION['session_username']);
			if($r){
				echo "<html><head><meta http-equiv='Refresh' content='0; URL=../current_user.php'></head></html>";
			}else{
				exit (mysqli_error());
			}
		}else{
			echo "<html><head><meta http-equiv='Refresh' content='0; URL=../edite_email_form.php'></head></html>";
			echo "Ви ввели невірний пароль";
		}
	}else{
			echo "<html><head><meta http-equiv='Refresh' content='0; URL=../edite_email_form.php'></head></html>";
			echo "Паролі повинні співпадати!";
	}
}elseif (isset($_POST['edite_pass_conf'])){//якщо натиснули змінити пароль
		if($_POST['password'] == $_POST['r_password']){//якщо паролі збігаються
			include("current_user_edite_action.php");
			$e= new UserUpdate();
			$check= $e -> check_pass($_POST['old_pass'], $_SESSION['session_username']);///перевірка паролю в БД
				if($check){
					$r=$e->update_user_pass($_POST['password'], $_SESSION['session_username']);//запис нового паролю в БД
						if($r){
							echo "<html><head><meta http-equiv='Refresh' content='0; URL=../current_user.php'></head></html>";
						}else{
							exit (mysqli_error());
						}
				}else{
					echo "<html><head><meta http-equiv='Refresh' content='0; URL=../edite_email_form.php'></head></html>";
					echo "Ви ввели невірний пароль";
				}
		}else{
			echo "<html><head><meta http-equiv='Refresh' content='0; URL=../edite_email_form.php'></head></html>";
			echo "Паролі повинні співпадати!";
		}


}else{
 exit("error");
}

?>