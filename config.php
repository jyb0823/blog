<?php
  $host = "localhost";
  $user = "ybin";
  $password = "000000";
  $db = "blog";
  $mysqli = new mysqli($host, $user, $password, $db);
  
 /* check connection */ 
	if ($mysqli->connect_errno) {
		 die('Connect Error: ' . $mysqli->connect_errno);
	}
?>