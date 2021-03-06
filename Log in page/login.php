<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create An Account - InspireArt</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Chela+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="login.css">

</head>

<body>
		
	<div class="container-fluid">
		<div class="row nav">
			<div class="col-6">
				<img src="../images/inspireart_logo_tr.png" class="logo" alt="">
			</div>
			<div class="col-6 text-end mt-4">
				<div class="join">
					<a href="../Join page/join.php">Join</a>
			</div>
			</div>
		</div>
	</div>
		<div class="container">
				<div class="info-box">
					<div class="box-head">
						<h1 class="text-center">Log In Your Account</h1>
					</div>
					<div class="box-content">
						<form action="login-data.php"
						method = "post">
							<input type="email" name="email" placeholder="&#xf0e0;  Email Address" required>
							
							<input type="password" name="password" placeholder="&#xf023;   Password" required>
							<div class="submit">
								<input type="submit" value="submit">
							</div>
						</form>
		</div>