<?php 
	require_once "pdo.php";

	// p' OR '1'='1

	if(isset($_POST['email'])&&($_POST['password'])){
		echo("<p>Handling POST data...</p>\n");

		$sql="SELECT name FROM users 
			WHERE email=:em 
			AND password=:pw
			";// create a little place , and dont let the data escape

		echo "<p>$sql</p>\n";

		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(
			':em' => $_POST['email'],
			':pw' => $_POST['password']));
		//if they put funky characters in there, Do whatever
		$row=$stmt->fetch(PDO::FETCH_ASSOC);

		var_dump($row);
		echo "-->\n";
		if($row===FALSE){
			echo "<h1>Login incorrect.</h1>\n";
		}else{
			echo "<p>Login success.</p>\n";
		}
	}
 ?>

 <p>Please Login</p>
 <form method="post">
 	<p>Email:
 	<input type="text" size="40" name="email"></input>
 	</p>
 	<p>Password:
 	<input type="text" size="40" name="password"></input>
 	</p>
 	<p><input type="submit" value="Login"></input>
 	<a href="<?php echo($_SERVER['PHP_SELF']);?>">Refresh</a>
 	</p>
 </form>