<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="/css/style1.css">
</head>
<body style="background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)), url(./images/b.jpg);">
	<div class="login-box">
		<img src="./images/i.png" class="icon">
		<h1>Souvik's Solution</h1>
		<form action="#" onsubmit="return validation()">
			<p>Username</p>
			<input type="text" name="user" placeholder="enter username" id="user" autocomplete="off">
			<span id="username" class="pop"></span>

			<p>Password</p>
			<input type="password" name="pass" placeholder="enter password" id="pass" autocomplete="off">
			<span id="password" class="pop"></span><br>
			
			<input type="submit" name="submit" value="Login" onclick="validation()">
						<span id="invalid" class="pop2" ></span>

			<a href="">Sign in.</a><br>
			<a href="#">Forgot Password?</a>
		</form>
	</div>
<script type="text/javascript">
	
	function validation()
	{
		var user=document.getElementById('user').value;
		var pass=document.getElementById('pass').value;

		if(user == "" )
		{
			document.getElementById('username').innerHTML ="** Please fill the Username field";
			return false;
		}
		 else if(pass == "")
		{
			document.getElementById('password').innerHTML ="** Please fill the Password field";
			return false;
		}
		else
			{
				alert("Your form is Submitted");

			}
		
	}
</script>


</body>
</html>