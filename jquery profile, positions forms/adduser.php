<?php 
	require_once"pdo.php";

	if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['password'])){
		$password=$_POST['password'];
		$hash = password_hash($password,PASSWORD_BCRYPT);
		$sql="INSERT INTO users(name,email,password) VALUES(:name,:email,:hash)";
		echo("<pre>\n".$sql."\n</pre>\n");
		$stmt=$pdo->prepare($sql);
		$stmt->execute(array(
			':name' => $_POST['name'],
			':email' => $_POST['email'],
			':hash' => $hash
			));
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
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