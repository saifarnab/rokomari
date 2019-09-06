<!DOCTYPE HTML>
<html>
<head>
<title>User Register</title>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/structure.css">
</head>

<body>
<form style="height: auto;" class="box login" action="regtologin.php" method="get">
	<fieldset class="boxBody">
	  <label>Username</label>
	  <input name="user" type="text" tabindex="1" placeholder="" required>
	  <label>Email</label>
	  <input name="email" type="text" tabindex="1" placeholder="" required>
	  <label><a href="#" class="rLink"></a>Password</label>
	  <input name="pass" type="password" tabindex="2" required>
	</fieldset>
	<footer>
	  <input type="submit" class="btnLogin" value="Register" tabindex="4">
	</footer>
</form>

</body>
</html>
