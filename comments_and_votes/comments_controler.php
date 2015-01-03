<?php 
session_start();
if(isset($_POST['send'])){

	include_once("comment_action.php");
    push_query();
}

?>