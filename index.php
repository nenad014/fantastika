<?php
	require('includes/connection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Fantastika | POČETNA</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/style.css">
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
			<h1 class="text-center">Welcome</h1>
			<p class="text-center">Korisnici</p>
			<?php
			$query = $conn -> query('SELECT * FROM user');
			while($r = $query->fetch()) {
				echo $r['u_unm'] . ' ';
			}
			?>
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