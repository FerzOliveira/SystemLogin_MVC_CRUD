<!DOCTYPE html>
<html>
<head>
<title>Login</title>
	<script type="application/javascript" src="../js/login.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
	<center>
		
		<form id="dados" class="form">
		
		<p>E-mail:<input class="email" name="email" id="emailbox" type="email"></p>
		<p>Password:<input class="password" name="password" id="passwordbox" type="password"></p>
		
		<input type="button" id="login" value="login" OnClick="Login();">
		<input type="hidden" name="action" id="action" value="login">
	
	</form>
	</center>
</body>
</html>