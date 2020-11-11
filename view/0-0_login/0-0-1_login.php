<!DOCTYPE html>
<html>
<head>
	 <title>LOGIN</title>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <base href='<?php echo $_SERVER['PHP_SELF']; ?>'>
	<link rel="stylesheet" type="text/css" href="../../css/frame.css">
	<link rel="stylesheet" type="text/css" href="../../css/login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">  
</head>
<body>
	<div class="login-div">
		
		<div class="title">Sign Up</div>

		<div class="fields">
			<div class="form_group">
                <label>Eamil</label>
                <i class="far fa-envelope icon"></i>
                <input type="email" name="" class="form_control" autocomplete="off">
             </div>
			<div class="form_group">
                <label>Password</label>
                <i class="fas fa-key icon"></i>
                <input type="password" name="" class="form_control" autocomplete="off">
             </div>
             <a href="../../home">
              <button class="sign-in">Login</button>
            </a>
		</div>
		<div class="link">
			<a href="#">Forgot password</a> or 
			<a href="#" class="sign-up">Sign up</a>
		</div>
	</div>
	
</body>
</html>