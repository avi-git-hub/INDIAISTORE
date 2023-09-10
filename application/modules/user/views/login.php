<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Login - Indiaistore</title>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo PATH_BACKEND_THEME_PLUGINS, 'fontawesome-free/css/all.min.css'; ?>">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?php echo PATH_BACKEND_THEME_PLUGINS, 'icheck-bootstrap/icheck-bootstrap.min.css'; ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo PATH_BACKEND_THEME_CSS, 'adminlte.min.css'; ?>">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
<div class="login-box">
	<div class="login-logo">
		<a href="<?php echo BASE_URL, 'user/login'; ?>"><b>Indiaistore</b></a>
	</div>
	
	<div class="card">
		<div class="card-body login-card-body">
			<p class="login-box-msg">Sign in to start your session</p>
			
			<form method="post">
				<div class="input-group mb-3">
					<input type="email" class="form-control" name="field_email" id="field_email" placeholder="Email" title="Enter Your Email" >
					
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-envelope"></span>
						</div>
					</div>
				</div>
				
				<div class="input-group mb-3">
					<input type="password" class="form-control" name="field_password" id="field_password" placeholder="Password" title="Enter Your Password" />
					
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				
				<div class="row">
					<!--<div class="col-8">
						<div class="icheck-primary">
							<input type="checkbox" id="remember">
							
							<label for="remember">
								Remember Me
							</label>
						</div>
					</div>-->
					
					<div class="offset-8 col-4">
						<button type="submit" class="btn btn-primary btn-block">Sign In</button>
					</div>
				</div>
			</form>
			
			<!--<div class="social-auth-links text-center mb-3">
				<p>- OR -</p>
				<a href="#" class="btn btn-block btn-primary">
					<i class="fab fa-facebook mr-2"></i> Sign in using Facebook
				</a>
				
				<a href="#" class="btn btn-block btn-danger">
					<i class="fab fa-google-plus mr-2"></i> Sign in using Google+
				</a>
			</div>
			
			<p class="mb-1">
				<a href="forgot-password.html">I forgot my password</a>
			</p>
			
			<p class="mb-0">
				<a href="register.html" class="text-center">Register a new membership</a>
			</p>-->
		</div>
		<!-- /.login-card-body -->
	</div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo PATH_BACKEND_THEME_PLUGINS, 'jquery/jquery.min.js'; ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo PATH_BACKEND_THEME_PLUGINS, 'bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo PATH_BACKEND_THEME_JS, 'adminlte.min.js'; ?>"></script>

</body>
</html>