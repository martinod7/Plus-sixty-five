
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="H.Y.D.R.A/css/style.css">
	<link rel="stylesheet" href="H.Y.D.R.A/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
</head>
<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
<body>
	<div class="container">
		<div class="row vertical-offset-100">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
					<div class="row-fluid user-row">
						<div class="Titulo">
							<img src="logo.png" class="logo">
						</div>
					</div>
				</div>
				<div class="panel-body">
					<form accept-charset="UTF-8" role="form" class="form-signin" action="verificar.php" method="post">
						<fieldset>
							<label class="panel-login">
								<div class="login_result"></div>
							</label>
							<input title="Se necesita un nombre" class="form-control" name ="Username"placeholder="Username" id="username" type="text" required />
							<input class="form-control" placeholder="Password" name="password" id="password" type="password" required />
							<br><br>
							<input class="btn btn-lg btn-success btn-block" type="submit" id="login" name="login" value="Login">
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
</body>
</html>