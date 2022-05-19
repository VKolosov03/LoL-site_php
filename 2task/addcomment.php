<?php
	$comment_result=$_POST['comment'];
	if(strlen($comment_result)>0) {
		require('bdconnect.php');
		$db->query("INSERT INTO test (context) VALUES ('$comment_result')");
	}
	header("Location: pyke.php");
?>