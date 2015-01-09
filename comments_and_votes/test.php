<?php
if(!isset($_SESSION)){session_start();} 

include("vote_action.php");
$v=new Vote();
$test= $v->vote_rating('13');
echo "$test";
?>