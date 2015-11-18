<?php
  session_start();
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
		<h3><a href="./login.php">Change to other Firepads</a></h3>
		<iframe src="userlist.php?firepad_id=<?php echo $_GET["id"];?>" style="width:100%;height:450px;"></iframe>
		
	</center>
	<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>
