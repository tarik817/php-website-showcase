<?php session_start(); ?>
<meta charset="utf-8">
<form class ="coment" method="post" action="comment_action.php">
  <p>Користувач: <?php echo $_SESSION['session_username']; ?>
  </p>
  <p>Ваш коментар<Br>
   <textarea name="comment" cols="40" rows="3"></textarea></p>
  <p><input type="submit" name = "send" id="send" value="Отправить">
   <input type="reset" value="Очистить"></p>
 </form>