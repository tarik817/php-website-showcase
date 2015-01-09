<?php 
if(!isset($_SESSION)){session_start();} 

include("vote_controler.php");
$v= new VoteControler();
$try = $v->vote_preview();
if($try == false){ ?>
				<meta charset="utf-8">
						<!-- Форма голосування -->
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
 					<?php
			}else{
	 			echo 'Дякуємо за вашу оцінку! <br> Ваша оцінка ';
	 			echo "$try";
	 			?>
	 			 	 <form method="post" action="comments_and_votes/vote_controler.php">
	 						<input type ="hidden" value="<?php echo $id; ?>" name="article_id" id ="article_id">
 							<input type="submit" name="vote_d" value="Видалити оцінку."></p>
 						</form>

				<?php }


?>