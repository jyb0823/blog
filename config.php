<?php
    $host = "localhost";
	$user = "ybin";
	$password = "000000";
	$db = "blog";
	mysql_connect($host, $user, $password);
	if(!mysql_select_db($db)) {
		die("DB connection is failed : ". mysql_error());
	}
?>