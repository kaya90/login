<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<div class="wrapper">
		<h2>Welcome <?=$user['first_name']?>!</h2>
		<a href="/logout">log off</a>
		<div class="box">
			<h2>User Information</h2>
			<p>First Name: <?=$user['first_name']?></p>
			<p>Last Name: <?=$user['last_name']?></p>
			<p>Email Address: <?=$user['email']?></p>
		</div>
	</div>
</body>
</html>