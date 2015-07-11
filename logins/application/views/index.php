<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<style type="text/css">
	.box{
		width: 500px;
		padding: 10px;
		margin: 20px;
		border: 1px solid silver;

	}
	.green {
		color:green;
	}
	.red {
		color:red;
	}
	</style>
</head>
<body>

<div class="wrapper">
	<div class="message">
<?php 
	if(isset($messages))
		{
			echo $messages;
		}
?>
	</div>
	<div class="box">
		<h2>Log In</h2>
		<form method="post" action="login">
			<p>Email: <input type="text" name="email"></p>			
			<p>Password: <input type="password" name="password"></p>
			<input type="hidden" name="validation" value="login">
			<input type="submit" value="Login">			
		</form>
	</div>
	<div class="box">
		<h2>Or Register</h2>
		<form method="post" action="register">
			<p>First Name: <input type="text" name="first_name"></p>			
			<p>Last Name: <input type="text" name="last_name"></p>
			<p>Email: <input type="text" name="email"></p>			
			<p>Password: <input type="password" name="password"></p>
			<p>Confirm Password: <input type="password" name="confirm_password"></p>
			<input	type="hidden" name="validation" value="registration">
			<input type="submit" value="Register">
		</form>
	</div>
	
</div>

</body>
</html>