<?php 
  include 'includes/layout.php'; 
?>

<div id="container">
	<header><h1>Guest Book</h1></header>
	
	<?php 
	  include 'includes/aside.php'; 
	?>
	
	<form id="guestbook" action="post.php" method="POST">
		<label>Name : </label> <br />
		<input name="name" type="text" size="45" required> <br />
		<label>email : </label> <br />
		<input name="email" type="email" size="45"> <br />
		<label>Password : </label> <br />
		<input name="password" type="password" size="45" required> <br />
		<label>Comment : </label> <br />
		<textarea name="comment" rows="15" cols="40" size="45" required></textarea> <br/>
		<input class="btn btn-default" type="submit" value="submit">
	</form>
	
	 <?php
        require 'config.php';

        $sql = "SELECT * FROM guestbook order by regDate desc";
        $result = $mysqli->query($sql);

        echo "<div id=\"comments\">";
        while($row = $result->fetch_assoc()) {
         echo "<table><tr><th>Name : </th><td class=\"name\">". htmlspecialchars($row['name'])."</td></tr>";
         echo "<tr><th>Email : </th><td class=\"email\">".htmlspecialchars($row['email'])."</td></tr>";
         echo "<tr><th>Comment : </th><td class=\"comment\">".htmlspecialchars($row['comment'])."</td></tr>";  
         echo "<tr><td class=\"date\" colspan=\"2\">".$row['regDate']."</td></tr></table>";

        };
        echo "</div>";
     ?>
	
	
</div>
<?php
  include 'includes/footer.php';
?>
