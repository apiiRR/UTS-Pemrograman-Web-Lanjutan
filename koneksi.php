<?php 
	
	$dsn = 'mysql:dbname=dbpegawai;host=localhost';
	$user = 'root';
	$password = '';

	try {
		$connect = new PDO($dsn, $user, $password);
		$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$connect->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,TRUE);
		// echo 'koneksi tersambung';
	}
	catch(PDOException $e) {
		echo 'Gagal koneksi'.$e->getMessage();
	}

	// $pass = SHA1(MD5('staff'));
	// $sql = "INSERT INTO member (fullname, username, password, role) VALUES ('staff', 'staff', '$pass', 'staff')";
	// $ps = $connect->prepare($sql);
	// $ps->execute();

?>