<?php 
	//Tell PHP we won't be using cookies for the session
	ini_set('session.use_cookies', '0');
	ini_set('session.use_only_cookies', 0);
	ini_set('session.use_trans_sid', 1);

	session_start();
 		if(! isset($_SESSION['pizza'])){
	 	echo("<p>Session is empty</p>\n");
	 	$_SESSION['pizza'] = 0;
	 }elseif ($_SESSION['pizza'] < 3) {
	 	$_SESSION['pizza'] = $_SESSION['pizza'] + 1;
	 	echo("<p>Added one...</p>\n");
	 }else{
	 	session_destroy();
	 	session_start();
	 	echo("<p>Session Restarted</p>\n");
	 }
  ?>

  <p><a href="nocookies.php">Click This Anchor Tag!</a></p>
  <p>
  	<form method="post">
  		<input type="submit" name="click" value="Click This Submit Button!"></input>
  	</form>
  	<p>Our Session ID is: <?php echo(session_id()); ?></p>
  </p>
  <pre>
  	<?php print_r($_SESSION); ?>
  </pre>