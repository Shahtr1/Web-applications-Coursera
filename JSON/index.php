<!DOCTYPE html>
<html>
<head>
	<title>JSON</title>
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$.getJSON('json.php',function(data){ //deserialized
				$("#back").html(data.first);
				console.log(data);
			})
		});
	</script>
</head>
<body>
<p>Howdy - Lets get some JSON</p>
<p id="back">Before</p>
<p>
	<a href="syntax.php">JSON Syntax</a>
	<a href="json.php">json.php</a>
</p>
</body>
</html>