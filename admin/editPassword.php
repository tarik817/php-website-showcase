<?php
session_start();
include("../conect.php");

echo session_name();

if(isset($_POST['edit_enter'])){
    $login= $_POST['login'];
    echo "$r_password";
    $password= md5($_POST['password']);
    $r_password = md5($_POST['r_password']);

    $query= mysqli_query ($conect, "SELECT * FROM users WHERE user = '$login'") or die (mysqli_error());
    $user_data= mysqli_fetch_array($query);

    if($user_data['password']== $password){

    }else{
        ?><script>alert("")</script><?php

    }
    if($r_password!=$password){
        echo "Паролі повинні співпадати";

    }
}
?>
<meta charset="iso-8859-5">
<link href="../css/main.css" rel="stylesheet" type="text/css">
<div class ="login">
    <h1>Зміна паролю</h1>
    <form name="loginform" id="loginform" action="" method="POST">
        <p>
            <label for="user_pass">Введіть поточний пароль<br />
                <input type="password" name="login" id="password" class="input" value="" size="20" /></label>
        </p>
        <p>
            <label for="user_pass">Введить новий пароль<br />
                <input type="new_password" name="new_password" id="new_password" class="input" value="" size="20" /></label>
        </p>
        <p>
            <label for="user_pass">Повторіть пароль<br />
                <input type="password" name="r_password" id="r_password" class="input" value="" size="20" /></label>
        </p>
        <p class="submit">
            <input type="submit" name="edit_enter" class="button" value="Підтвердити" />
        </p>
    </form>

</div>

