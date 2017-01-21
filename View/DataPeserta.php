<?php

use App\Mahasiswa;

$cek = new Mahasiswa();

$cek->cekDaftar('daftar');

?>

<div class="group">
	<i class="fa fa-th-list fa-lg left"></i>
	<span class="right">DATA PESERTA</span>
</div>
<table>
	<tr>
		<th class="qty">NO</th>
		<th>NO DAFTAR</th>
		<th>TANGGAL DAFTAR</th>
		<th>NAMA PESERTA</th>
		<th>E-MAIL</th>
		<th>SEKOLAH ASAL</th>
		<th>STATUS TES</th>
	</tr>
<?php $no = 1 ?>
<?php foreach ($_SESSION['daftar'] as $key => $val) : ?>
	<tr>
		<td><?= $no++ ?></td>
		<td><?= $val['noDaftar'] ?></td>
		<td><?= $val['tanggalDaftar'] ?></td>
		<td><?= $val['nama'] ?></td>
		<td><?= $val['email'] ?></td>
		<td><?= $val['sekolahAsal'] ?></td>
		<td class="gagal"><?= $val['statusDaftar']?></td>
	</tr>
<?php endforeach; ?>
</table>