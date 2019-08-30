<?php
	session_start();
	require('includes/connection.php');
	if(empty($_SESSION['username'])) {
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PROFIL | Fantastika</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/style.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
</head>
<body>
	<div class="container-fluid">
		<div>
			<?php
				include('includes/top.php');
			?>
		</div>
		<div class="col-sm-3">
			<?php
				include('includes/leftmenu.php');
			?>
		</div>
		<div class="col-sm-6">
			<h1 class="text-center">Dobro došli <?php echo $_SESSION['username']; ?></h1>
		</div>
		<div class="col-sm-3"></div>
	</div>
	<div class="text-center">
		<?php
			include('includes/footer.php');
		?>
	</div>
</body>
</html>