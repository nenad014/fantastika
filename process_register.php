<?php
require('includes/connection.php');
$errMsg = "";

if(isset($_POST['submit'])) {
	$fullname = $_POST['fnm'];
	$username = $_POST['unm'];
	$email = $_POST['email'];
	$password = $_POST['pwd'];
	$cnfrmpass = $_POST['cpwd'];

	if($fullname == '') {
		$errMsg = 'Unesite ime i prezime';
	}
	if($username == '') {
		$errMsg = 'Unesite Vase korisnicko ime';
	}
	if($email == '') {
		$errMsg = 'Unesite Vas email';
	}
	if($password == '') {
		$errMsg = 'Unesite Vasu lozinku';
	}
	if($password != $cnfrmpass) {
		$errMsg = 'Lozinke moraju biti iste.';
	}

	if($errMsg == '') {
		try {
			$stmt = $conn -> prepare('INSERT INTO user (u_fnm, u_unm, u_email, u_pwd) VALUES (:fullname, :username, :email, :password)');
			$stmt -> execute(array(
					':fullname' => $fullname,
					':username' => $username,
					':email' => $email,
					':password' => $password
			));
			echo 'Uspesno ste registrovani. Sada se mozete prijaviti.';
		}
		catch(PDOException $e) {
			echo $e->getMessage();
		}
	}
}
?>