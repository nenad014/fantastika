<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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
		<div class="col-sm-3">
			<?php
				include('includes/leftmenu.php');
			?>
		</div>
		<div class="col-sm-6">
			<h3 class="text-center">Dodaj knjigu</h3>
			<form class="form-horizontal" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label class="control-label col-sm-2">Naziv knjige</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" name="naziv" placeholder="Unesite naziv knjige">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Autor knjige</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" name="autor" placeholder="Unesite autora knjige">
					</div>	
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Naziv serijala</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" name="serijal" placeholder="Unesite naziv serijala">
					</div>	
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Opis knjige</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" name="opis" placeholder="Unesite opis knjige">
					</div>	
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Dodaj fajl</label>
					<div class="col-sm-10">
						<input type="file" name="fajlPDF">
					</div>	
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Dodaj sliku</label>
					<div class="col-sm-10">
						<input type="file" name="fajlSlika">
					</div>	
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button class="btn btn-default" type="submit" name="dodaj">Dodaj knjigu</button>
					</div>
				</div>
			</form>
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