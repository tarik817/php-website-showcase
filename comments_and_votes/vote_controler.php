
<?php
if(!isset($_SESSION)){session_start();} 


if(isset($_POST['vote_b'])){
	include("vote_action.php");
	$v= new Vote();
	$vote=$v-> push_vote($_POST['vote'], $_SESSION['session_username'], $_POST['article_id']);
			if($vote ==false){
			}
			if($vote!=0){
				echo "<html><head><meta http-equiv='Refresh' content='0; URL=../view.php?id=".$_POST['article_id']."'></head></html>";
			}
}
if(isset($_POST['vote_d'])){
	include("vote_action.php");
	$v= new Vote();
	$try = $v->delete_vote($_SESSION['session_username'], $_POST['article_id']);
		if($try ==true){
			echo "<html><head><meta http-equiv='Refresh' content='0; URL=../view.php?id=".$_POST['article_id']."'></head></html>";
		}

}


class VoteControler{
			
	function vote_preview($article_id){
		include("vote_action.php");
		$v = new Vote();
		$try = $v->is_vote($article_id);
			$prev['try']=$try;
		$rating = $v->vote_rating($article_id);
			$prev['rating'] = $rating;
			return $prev;
	
	}
}

?>