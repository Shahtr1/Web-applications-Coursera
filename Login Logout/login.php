<?php 
	session_start();
	if( isset($_POST["account"]) && isset($_POST["pw"]) ) {
		unset($_SESSION["account"]);
		if($_POST['pw'] == 'umsi') {
			$_SESSION["account"] = $_POST["account"];
			$_SESSION["success"] = "Logged in.";
			header('Location: app.php');
			return;
		}else{
			$_SESSION["error"] = "Incorrect Password.";
			header('Location: login.php');
			return;
		}
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

<?php 
	if(isset($_SESSION["error"])) {
		echo('<p style="color:red">'.$_SESSION["error"]."</p>\n");
		unset($_SESSION["error"]);
	}
	if(isset($_SESSION["success"])) {
		echo('<p style="color:green">'.$_SESSION["success"]."</p>\n");
		unset($_SESSION["success"]);
	}
 ?>

 	<form method="post">
 		<p>Account: <input type="text" name="account" value=""></input></p>
 		<p>Password: <input type="text" name="pw" value=""></input></p>
 		<p><input type="submit" value="Log In"></input>
 		<a href="app.php">Cancel</a></p>
 	</form>
 </body>
 </html>