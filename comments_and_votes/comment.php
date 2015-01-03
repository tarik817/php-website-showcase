
<meta charset="utf-8">
<form class ="comment" method="post" action="comments_and_votes/comments_controler.php">
  <p>Користувач: <?php echo $_SESSION['session_username']; ?>
  </p>
  <p>Ваш коментар<Br>
  	<input type ="hidden" value="<?php echo $id;?>" name="id_article" id ="id_article">
   <textarea name="comment" cols="94" rows="3" placeholder = "Ваш коментар буде обрізано по останьому слову якщо кількість символів перевищить 150."></textarea></p>
  <p><input type="submit" name = "send" id="send" value="Отправить">
   <input type="reset" value="Очистить"></p>
 </form>