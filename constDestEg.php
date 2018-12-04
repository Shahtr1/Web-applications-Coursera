<!DOCTYPE html>
<html>
<head>
	<title>example</title>
</head>
<body>
	<?php
		class Hello{
			protected $lang;
			function __construct($lang){
				$this -> lang = $lang; 
			}
			function greet(){
				if($this -> lang == 'es'){echo "Hello";}
				if($this -> lang == 'fr'){echo "Bonjour";}
			}
		}
		$language= new Hello('fr');
		$language->greet();
	  ?>
</body>
</html>