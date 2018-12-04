<!DOCTYPE html>
<html>
<head>
	<title>Constructor and Destructor</title>
</head>
<body>
	<?php
		class Person{
			function __construct(){
				echo "Constructed";
			}
			function Something(){
				echo "Something";
			}
			function __destruct(){
				echo "destructed";
			}
		}
		$x = new Person;
		$y = new Person;
		$x -> Something();
	  ?>
</body>
</html>