<?php
    require_once("config.php");
	
	$query = "INSERT INTO GUESTBOOK(name, email, password, comment, regDate) VALUES('".mysql_real_escape_string($_POST['name'])."', '"
	.mysql_real_escape_string($_POST['email'])."', '".mysql_real_escape_string($_POST['password'])."', '".mysql_real_escape_string($_POST['comment'])."', now());";
	
	mysql_query($query);
	header("location: guestbook.php");
?>