<!DOCTYPE html>
<html>
<head>
	<title>OOP</title>
</head>
<body>
	<?php
	class Person{
		public $fullName = false;
		public $givenName = false;
		public $familyName = false;
		public $room = false;

		function getName(){
			if ($this -> fullName !== false) {
				return $this -> fullName;
			}
			if (($this -> familyName !== false)&&($this -> givenName !== false)) {
				return $this ->givenName . ' ' . $this ->familyName;
			}
			return false;
		}
	}
	$chuck = new Person();
	$chuck -> fullName = 'Chuck PataniKya';
	$chuck -> room = '123';

	$chukla = new Person();
	$chukla -> familyName = 'BohtKuch';
	$chukla -> givenName = 'Chukla';
	$chukla -> room = '124';

	print $chuck->getName() . "\n" ;
	print $chukla->getName() . "\n" ;
	  ?>
</body>
</html>