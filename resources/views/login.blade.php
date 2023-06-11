<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="{{ asset('images/wave.png') }}">
	<div class="container">
		<div class="img">
			<img src="{{ asset('images/bg.svg') }}">
		</div>
		<div class="login-content">
			<form action="{{ route('processLogin') }}" method="POST">
				@csrf
				<img src="{{ asset('images/avatar.png') }}">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" class="input" name="EmailDent" value="{{ old('EmailDent') }}" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Mot de Passe</h5>
           		    	<input type="password" name="password" class="input" required>
            	   </div>
            	</div>
            	<a href="#">Mot de Passe oublié ?</a>
            	<input type="submit" class="btn" value="Se connecter">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/login.js') }}"></script>
</body>
</html>
