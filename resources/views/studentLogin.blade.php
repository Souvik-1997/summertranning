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
		{{$errors}}
		<form action="{{route("login.handle")}}" method="POST" {{--onsubmit="return validation()"--}}>
			@csrf
			<p>Student name :</p>
			<input type="text" name="s_name" placeholder="enter username" id="user" autocomplete="off">
			<span id="username" class="pop"></span>

			<p>Student Id :</p>
			<input type="text" name="s_id" placeholder="enter id" id="pass" autocomplete="off">
			<span id="s_id" class="pop"></span><br>

			<p>Student password :</p>
			<input type="password" name="password" placeholder="enter pass" id="pass" autocomplete="off">
			<span id="password" class="pop"></span><br>
			
			<input type="submit" name="s_login" value="Login" {{--onclick="validation()"--}}>
						<span id="invalid" class="pop2" ></span>

			<a href="">Sign in.</a><br>
			<a href="#">Forgot Password?</a>
		</form>
	</div>
{{-- <script type="text/javascript">
	
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
</script> --}}
{{-- name varriable --}}

 {{-- s_name,s_id,s_login, --}}

</body>
</html>