<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.min.js"></script>
</head>
<body>
	<form id="target">
	<input type="text" name="one" value="Hello there" style="vertical-align: middle;"></input>
	<img id="spinner" src="spinner.gif" height="25" style="vertical-align: middle; display: none;">
</form>
<hr/>
<div id="result"></div>
<hr/>

<script type="text/javascript">
	$('#target').change(function(event){
		event.preventDefault();
	$('#spinner').show();
	var form = $('#target');
	var txt = form.find('input[name="one"]').val();
	console.log('Sending POST');
	$.post('autoecho.php',{'val':txt},
		function(data){
			console.log(data);
			$('#result').empty().append(data);
			$('#spinner').hide();
		}).error(function(){
			console.log('error');
		});

		return false;	
	});
</script>

</body>
</html>

