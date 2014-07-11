<?php
   require_once("config.php");

   $sql = "INSERT INTO guestbook(name, email, password, comment, regDate) VALUES('".$_POST['name']."', '"
        .$_POST['email']."', '".$_POST['password']."', '".$_POST['comment']."', now());";

   $conn->query($sql);

   header("location: guestbook.php");
?>