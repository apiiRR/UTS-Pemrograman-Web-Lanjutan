<?php 
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
	require_once '../koneksi.php';
	require_once '../models/Pegawai.php';
	require_once '../models/Upload.php';

	$upload = new Upload();

	$nip = $_POST['nip'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$agama = $_POST['agama'];
	$iddivisi = $_POST['divisi'];
	$tombol = $_POST['proses'];
	$foto = $upload->upload();
	if (!$foto) {
		return false;
	}

	$data = [
		$nip,
		$nama,
		$email,
		$agama,
		$iddivisi,
		$foto
	];

	// var_dump($tombol);
	$object = new Pegawai();
	switch($tombol) {
		case 'simpan':
			$object->simpan($data);
			break;
		case 'ubah':
			$data[] = $_POST['idx'];
			$object->ubah($data);
			break;
		case 'hapus':
			$id[] = $_POST['idx'];
			$object->hapus($id);
			break;
		default:
			header('Location: ../index.php?page=dataPegawai');
			break;
	}

	header('Location: ../index.php?page=dataPegawai');


?>