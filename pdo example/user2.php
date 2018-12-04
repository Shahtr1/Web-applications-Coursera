<?php 
	require_once"pdo.php";

	if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['password'])){
		$sql="INSERT INTO users(name,email,password) VALUES(:name,:email,:password)";
		echo("<pre>\n".$sql."\n</pre>\n");
		$stmt=$pdo->prepare($sql);
		$stmt->execute(array(
			':name' => $_POST['name'],
			':email' => $_POST['email'],
			':password' => $_POST['password']
			));
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
<table border="1">
 <?php 
 	$stmt=$pdo->query("SELECT name,email,password FROM users");
 	while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
 		echo("<tr><td>");
 		echo($row['name']);
 		echo("</td><td>");
 		echo($row['email']);
 		echo("</td><td>");
 		echo($row['password']);
 		echo("</td></tr>\n");
 	}
  ?>
  </table>

 	<p>Add a new user</p>
 	<form method="post">
 		<p>Name:
 		<input type="text" name="name" size="40"></input></p>
 		<p>Email:
 		<input type="text" name="email" ></input></p>
 		<p>Password:
 		<input type="password" name="password"></input></p>
 		<p><input type="submit" value="Add New"></input></p>
 	</form>
 </body>
 </html>