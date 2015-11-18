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
		<h1 style="margin-bottom:50px;">Welcome to Intersective Firepad-test</h1>
		<form action="login.php" id="UserLoginForm" method="post" accept-charset="utf-8">
			<div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>
			<div class="label-100">
				<div class="input text required">
					<label for="UserUsername">Username</label>
					<input name="username" class="input-name" type="text" id="UserUsername" required="required"/>
				</div>
				<div class="input password required">
					<label for="UserPassword">Password</label>
					<input name="password" class="input-name" type="password" id="UserPassword" required="required"/>
				</div>			
			</div>
			<div class="div-left-button">
				<input  class="btn btn-custom" id="submit-button" onclick="this.disabled=true;this.form.submit();return true;" type="submit" value="Login"/>
			</div>
		</form>
	</center>
	<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>