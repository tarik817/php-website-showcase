
<meta charset="utf-8">
<link href="../css/main.css" rel="stylesheet" type="text/css">
<div class ="login">
    <h2>ПАНЕЛЬ АДМІНІСТРАТОРА</h2>
    <form name="loginform" id="loginform" action="../authentification/scripts/loginAction.php" method="POST">
        <p>
            <label for="user_login">Логін<br />
                <input type="text" name="login" id="login" class="input" value="" size="20" /></label>
        </p>
        <p>
            <label for="user_pass">Пароль<br />
                <input type="password" name="password" id="password" class="input" value="" size="20" /></label>
        </p>
        <p class="submit">
            <input type="submit" name="enter_go" class="button" value="Log In" />
        </p>
        <p class="regtext">Ви не адмін?<a href="../index.php" >Перехід на головну</a></p>
    </form>

</div>