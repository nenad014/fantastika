<!DOCTYPE html>
<html>
<head>
	<title>Fantastika | REGISTRACIJA</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div>
			<?php
				include('includes/top.php');
			?>
		</div>
		<div class="col-sm-9">
			<h1 class="text-center">Registracija</h1>
			<form method="POST" action="process_register.php">
				<label>Ime i prezime</label>
				<input class="form-control" type="text" name="fnm" placeholder="Unesite ime i prezime">
				<label>Korisničko ime</label>
				<input class="form-control" type="text" name="unm" placeholder="Unesite Korisničko ime">
				<label>email</label>
				<input class="form-control" type="email" name="email" placeholder="Unesite email adresu">
				<label>Lozinka</label>
				<input class="form-control" type="password" name="pwd" placeholder="Unesite lozinku">
				<label>Potvrdi lozinku</label>
				<input class="form-control" type="password" name="cpwd" placeholder="Potvrdite lozinku">
				<button type="submit" name="submit" class="btn btn-default">Registracija</button>
			</form>
		</div>
		<div class="col-sm-3">
			<?php
				include('includes/side.php');
			?>
		</div>
	</div>
	<div class="text-center">
		<?php
			include('includes/footer.php');
		?>
	</div>
</body>
</html>

