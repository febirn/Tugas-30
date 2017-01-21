<?php
session_start();

require __DIR__ . '/../vendor/autoload.php';

use App\Mahasiswa;

if (isset($_POST['login'])) {
	$login = new Mahasiswa;
	$login->loginMahasiswa('daftar', $_POST['username'], $_POST['password']);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>PMB | MIT</title>
	<link rel="stylesheet" type="text/css" href="../Asset/Css/style.css">
</head>
<body class="form-login">
	<section class="login">
		<form action="" method="POST">
		<?php if (isset($_POST['login'])) : ?>
			<?php if (isset($login->message)) : ?>
				<p class="message sukses"><?= $login->message ?></p>
			<?php else : ?>
				<p class="message error"><?= $login->error ?></p>
			<?php endif; ?>
		<?php endif; ?>
			<div class="avatar"> </div>
			<p><input type="text" name="username" placeholder="Username or E-Mail" 
				required></p>
			<p><input type="password" name="password" placeholder="Password" 
				required></p>
			<button type="submit" name="login" value="daftar">
				LOGIN</button>
		</form>
		<div class="back">
			<a href="../index.php">BACK TO HOME</a>
		</div>
	</section>
</body>
</html>