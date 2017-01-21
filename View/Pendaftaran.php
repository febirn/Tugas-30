<?php

use App\Mahasiswa;

if (isset($_POST['daftar'])) {

	$daftar = new Mahasiswa();
	$daftar->cekDaftar($_POST['daftar']);
	$daftar->setDaftar($_POST['nama'], $_POST['email'], $_POST['username'], 
		$_POST['password'], $_POST['asalskh'], 'BELUM TES', date('d/m/Y'));
	$daftar->daftarBaru();
}

?>

<div class="group">
	<i class="fa fa-user-plus fa-lg left"></i>
	<span class="right">FORMULIR PENDAFTARAN</span>
</div>
<form action="" method="POST">
<?php if (isset($_POST['daftar'])) : ?>
	<p class="message sukses"><?= $daftar->message ?></p>
<?php endif; ?>
	<p><input type="text" name="nama" placeholder="Nama Lengkap" 
		required></p>
	<p><input type="email" name="email" placeholder="E-Mail" required></p>
	<p><input type="text" name="username" placeholder="Username" required></p>
	<p><input type="password" name="password" placeholder="Password" 
		required></p>
	<p><input type="text" name="asalskh" placeholder="Sekolah Asal" 
		required></p>
	<button type="submit" name="daftar" value="daftar">DAFTAR SEKARANG</button>
</form>