<?php
	session_start();
	if(isset($_SESSION['user'])){
		header('location:home.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP Login using OOP Approach</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class = "container">
			<h1 class = "page-header text-center">PHP Login using OOP Approach</h1>
			<p class = "text-center">by <em>Joseph Emmanuel Calvo</em></p>
			<div class = "row">
				<div class = "col-md-4 col-md-offset-4">
					<div class = "login-panel panel panel-primary">
						<div class = "panel-heading">
							<h3 class="panel-title"><span class="glyphicon glyphicon-lock"></span> Login</h3>
						</div>
						<div class = "panel-body">
							<form method = "POST" action = "login.php">
								<fieldset>
									<div class="form-group">
										<input class="form-control" placeholder="Username" type="text" name="username" autofocus required>
									</div>
									<div class="form-group">
										<input class="form-control" placeholder="Password" type="password" name="password" required>
									</div>
									<button type="submit" name="login" class="btn btn-lg btn-primary brb-block"><span class="glyphicon glyphicon-log-in"></span> Login</button>
								</fieldset>
							<form>
						</div>
				</div>
				<?php
					if(isset($_SESSION['message'])){
					?>
						<div class="alert alert-info text-center">
							<?php echo $_SESSION['message']; ?>
						<?php
						
						unset($_SESSION['message']);
					}
					?>
			</div>
		</div>
	</body>
</html>