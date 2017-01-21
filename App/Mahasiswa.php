<?php

namespace App;

Class Mahasiswa
{
	private $nama;
	private $email;
	private $username;
	private $password;
	private $asalSklh;
	private $namaSession;

	public function cekDaftar($namaSession)
	{
		$this->namaSession = $namaSession;

		if (!empty($_SESSION[$this->namaSession])) {
			$inputData = $_SESSION[$this->namaSession];
		} else {
			$_SESSION[$this->namaSession] = array();
		}
	}

	public function setDaftar($nama, $email, $username, $password, 
		$sekolahAsal, $statusDaftar, $tanggalDaftar)
	{
		$this->nama = $nama;
		$this->email = $email;
		$this->username = $username;
		$this->password = $password;
		$this->sekolahAsal = $sekolahAsal;
		$this->statusDaftar = $statusDaftar;
		$this->tanggalDaftar = $tanggalDaftar;
	}

	public function noDaftar()
	{
		$noId = count($_SESSION[$this->namaSession]) + 1;
		$noDaftar = 'AC' . $noId . date('y');

		return $noDaftar;
	}


	public function daftarBaru()
	{	
		$this->cekDaftar($this->namaSession);

		$inputData = [
			'noDaftar'		=>	$this->noDaftar(),
			'nama'			=>	$this->nama,
			'email'			=>	$this->email,
			'username'		=>	$this->username,
			'password'		=>	$this->password,
			'sekolahAsal'	=>	$this->sekolahAsal,
			'statusDaftar'	=>	$this->statusDaftar,
			'tanggalDaftar'	=>	$this->tanggalDaftar,
		];

		$_SESSION[$this->namaSession][] = $inputData;

		return $this->message = "SELAMAT, PENDAFTARAN BERHASIL";
	}

	public function loginMahasiswa($namaSession, $username, $password)
	{
		$this->namaSession = $namaSession;
		$this->username = $username;
		$this->password = $password;

		foreach ($_SESSION[$this->namaSession] as $key => $val) {
			if ($this->username == $val['username'] 
				&& $this->password == $val['password']) {

				$_SESSION['login'] = [
					'user'	=>	$val['username'],
					'pass'	=>	$val['password'],
				];

			}
		}

		if ($this->username == $_SESSION['login']['user']
			&& $this->password == $_SESSION['login']['pass']) {

			return$this->message = 'LOGIN BERHASIL';

		} else {

			return $this->error = 'LOGIN GAGAL';

		}

		
	}
}

?>