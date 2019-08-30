<?php
session_start();
require('includes/connection.php');

if(isset($_POST['submit'])) {
	$errMsg = '';

	$username = $_POST['unm'];
	$password = $_POST['pwd'];

	if($username == '') {
		$errMsg = 'Unesite Korisnicko ime';
	}
	if($password == '') {
		$errMsg = 'Unesite lozinku';
	}
	if($errMsg == '') {
		try {
			$stmt = $conn->prepare('SELECT u_id, u_fnm, u_unm, u_email, u_pwd FROM user WHERE u_unm = :username');
			$stmt -> execute(array(
					':username' => $username
				));
			$data = $stmt->fetch(PDO::FETCH_ASSOC);
			if($data == false) {
				$errMsg = 'Korisnik $username nije pronadjen.';
			} else {
				if($password = $data['u_pwd']) {
					$_SESSION['username'] = $data['u_unm'];
					$_SESSION['password'] = $data['u_pwd'];
					header('Location: profile.php');
					exit;
				} else {
					$errMsg = 'Lozinka nije tacna.';
				}
			}
		} catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
	}
}