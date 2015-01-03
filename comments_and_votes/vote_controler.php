<?php 
session_start();
if(isset($_POST['vote_b'])){

	include_once("vote_action.php");
	check_and_push_vote();
}
?>