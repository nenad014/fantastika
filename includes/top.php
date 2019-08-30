<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Lobster&display=swap&subset=latin-ext');
	.jumbotron {
		background-image: url('img/header.jpg');
		background-position: center;
		background-size: cover;
		color: white;
		font-family: 'Lobster', cursive;
	}
</style>

<div class="jumbotron text-center">
	<h1>Epska fantastika</h1>
	<h3>„Da li avanture moraju da se završe? Verovatno ne. Neko drugi će uvek morati da nastavi priču.“</h3>
</div>
<ul class="nav nav-tabs">
	<li><a href="index.php">POČETNA</a></li>
	<li><a href="news.php">VESTI</a></li>
	<li><a href="forum.php">FORUM</a></li>
	<li><a href="contact.php">KONTAKT</a></li>
	<?php
		if(isset($_SESSION['username'])) {
			echo '<li><a href="logout.php">ODJAVA</a></li>';
		} else {
			echo '<li><a href="register.php">REGISTRACIJA</a></li>';
		}
	?>
</ul>