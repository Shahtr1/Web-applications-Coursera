<?php 
	session_start();
	if(isset($_POST['reset'])){
		$_SESSION['chats']=Array();
		header("Location:index.php");
		return;
	}
	if(isset($_POST['message'])){
		if(!isset($_SESSION['chats']))$_SESSION['chats']=Array();
		$_SESSION['chats'] []=array($_POST['message'],date(DATE_RFC2822));
		header("Location: index.php");
		return;
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>CHAT</title>
 </head>
 <script type="text/javascript" src="jquery.min.js"></script>
 <body>

 	<div id="chatcontent">
 		<img src="spinner.gif" alt="Loading..">
 	</div>

 	<h1>Chat</h1>
 	<form method="post">
 		<p>
 			<input type="text" name="message" size="60"></input>
 			<input type="submit" value="Chat"></input>
 			<input type="submit" name="reset" value="Reset"></input>
 		</p>
 	</form>

 	<script type="text/javascript">
		function updateMsg(){
			console.log("Requesting JSON");
			$.ajax({
				url:"chatlist.php",
				cache:false,
				success: function(data){
					console.log("JSON Received");
					console.log(data);
					$("#chatcontent").empty();
					for(var i=0;i<data.length;i++){
						entry = data[i];
						$("#chatcontent").append("<p>"+entry[0]+"<br/>&nbsp;&nbsp;"+entry[1]+"</p>\n");
					}
					setTimeout('updateMsg()',4000);
				}
			});
		}
	console.log("Startup complete");
	updateMsg();//call the first time to get things started
var scroll = setInterval(function(){ window.scrollBy(0,1000); }, );
 	</script>
 </body>
 </html>
















