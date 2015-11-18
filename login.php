<?php
	session_start();
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if($_POST["username"] == 'shawn' && $_POST["password"] == 'shawn'){
			$username = 'Shawn';
			$userid = 001;
		}elseif($_POST["username"] == 'billy' && $_POST["password"] == 'billy'){
			$username = 'Billy';
			$userid = 002;
		}elseif($_POST["username"] == 'karam' && $_POST["password"] == 'karam'){
			$username = 'Karam';
			$userid = 003;
		}else{
			header("Location: ./index.php"); 
			exit();
		}
		$_SESSION["username"] = $username;
		$_SESSION["userid"] = $userid;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Firepad-test</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.2.min.js"></script>
</head>
<body>
	<center>
		<h1 style="margin-bottom:50px;">Hello, <?php echo $_SESSION["username"];?>!</h1>
		<h3>Here are all the firepads</h3>
		<a href="./firepad.php?id=1">First Firepad</a><br/>
		<a href="./firepad.php?id=2">Second Firepad</a>
	</center>
	<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>