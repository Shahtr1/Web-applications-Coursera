<?php 
$connect = mysqli_connect('localhost','fred','zap','misc2');

if(isset($_POST['email'])){
	$email=$_POST['email'];
	$password=$_POST['password'];

	$email = strip_tags(mysqli_real_escape_string($connect,trim(email)));
	$password = strip_tags(mysqli_real_escape_string($connect,trim(password)));

	$query="SELECT * FROM user WHERE email= $email";
	$tbl =mysql_query($connect,$query);
	if(mysqli_num_rows($tbl)>0){
		$row = mysqli_fetch_array($tbl);
		$password_hash = $row['password'];
		if(password_verify($password,$password_hash)){
			echo("matched");
		}else{
			echo("unmatched");
		}
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