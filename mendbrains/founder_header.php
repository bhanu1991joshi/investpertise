<!DOCTYPE html>
<html>
	<head>
		<title>Investpertise</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<style>
		
	</style>
	<script>
$(window).scroll(function () {
    var offsets = $('#about').offset();
	var top = offsets.top;
	
	if ($(this).scrollTop() > top-10) {
		document.getElementById("fixed").style.display="none";
		document.getElementById("rotated_div").style.visibility="visible";
		
	}
	else{
		document.getElementById("fixed").style.display="inline";
		document.getElementById("rotated_div").style.visibility="hidden";		
	}

});
	

</script>
		
	</head>
	<body>
		<div id="rotated_div">
			<a href="#" style="margin-left:80px;"><img src="logonew.png" style="height:50px;" /></a>	
			<a href="index.php" style="margin-left:200px;"><span class="glyphicon glyphicon-log-in"> </span> Login</a>
		</div>
		<nav class="navbar navbar-inverse navbar-fixed-top" id="fixed">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a href="#"><img src="logonew.png" style="height:50px;" /></a>
			  <a href="#"><img src="founder.png" style="height:50px;width:50px;border-radius:0;" /></a>
			  

			</div>
			<div id="navbar" class="collapse navbar-collapse">
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-folder-close"> </span> Templates</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-log-out"> </span> Log out</a></li>
			  </ul>
			</div><!--/.nav-collapse -->
		  </div>
		</nav>
	
		<br><br><br>	