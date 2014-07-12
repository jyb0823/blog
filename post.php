<?php
   require_once("config.php");
   
   $name = $mysqli->real_escape_string($_POST['name']);
   $email = $mysqli->real_escape_string($_POST['email']);
   $passwordd = $mysqli->real_escape_string($_POST['password']);
   $comment = $mysqli->real_escape_string($_POST['comment']);

   $sql = "INSERT INTO guestbook(name, email, password, comment, regDate) VALUES('".$name."', '"
        .$email."', '".$password."', '".$comment."', now());";

   $mysqli->query($sql);

   header("location: guestbook.php");
?>