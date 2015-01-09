
<?php
if(!isset($_SESSION)){session_start();} 


if(isset($_POST['vote_b'])){
	include("vote_action.php");
	$v= new Vote();
	$vote=$v-> push_vote($_POST['vote'], $_SESSION['session_username'], $_GET['id']);
			if($vote ==false){
			}
			if($vote!=0){
				echo "<html><head><meta http-equiv='Refresh' content='0; URL=../view.php?id=".$article_id."'></head></html>";
			}
}
if(isset($_POST['vote_d'])){
	include("vote_action.php");
	$v= new Vote();
	$try = $v->delete_vote($_SESSION['session_username'], $_GET['id']);

}


class VoteControler{
	function vote_preview(){

		include("vote_action.php");
		$v= new Vote();
		$try = $v->is_vote();
		return $try;
			
	}
}

?>