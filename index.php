<?php 
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
	session_start();
	global $member;
	global $role;
	
	require_once 'koneksi.php';

	include_once 'kode_atas.php';
	include_once 'header.php';
	include_once 'menu.php';
	include_once 'main.php';
	include_once 'sidebar.php';
	include_once 'footer.php';
	include_once 'kode_bawah.php';
?>