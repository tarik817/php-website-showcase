<meta charset="utf-8">
<form class ="vote" method="post" action="comments_and_votes/vote_controler.php">
  <p>Цей матеріал заслуговує оцінку:
   <input type="radio" name="vote" value="1"> 1 
   <input type="radio" name="vote" value="2"> 2 
   <input type="radio" name="vote" value="3"> 3
   <input type="radio" name="vote" value="4"> 4
   <input type="radio" name="vote" value="5"> 5
 <input type ="hidden" value="<?php echo $id;?>" name="article_id" id ="article_id">
 <input type="submit" name="vote_b" value="Проголосувати"></p>
 </form>