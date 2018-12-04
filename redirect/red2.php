<?php 
	session_start();
	if(isset($_POST['where'])){
		if($_POST['where'] == '1'){
			header("Location:red1.php");
			return;
		}elseif ($_POST['where']=='2') {
			header("Location:red2.php");
			return;
		}else {
			header("Location:http://www.shahfood.tk");
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
<p>I am Router Two...</p>
<form method="post">
	<p><label for="inp9">Where to go? (1_3)</label>
	<input type="text" name="where" id="inp9" size="5"></input></p>
	<input type="submit"></input>
</form>

</body>
</html>