<?php 
	session_start();
	require_once '../koneksi.php';
	require_once '../models/Member.php';
	echo 'Rafi';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$data = [
		$username,
		$password
	];

	$object = new Member();
	$rs = $object->cekLogin($data);
	if (!empty($rs)) {
		$_SESSION['MEMBER'] = $rs;
		header('Location: ../index.php');
	} else {
		header('Location: ../index.php?page=gagalLogin');
	}

?>