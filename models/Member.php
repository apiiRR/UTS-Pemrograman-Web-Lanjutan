<?php 
	
	class Member {

		private $koneksi;

		public function __construct() {
			global $connect;
			$this->koneksi = $connect;
		}

		public function cekLogin($data) {
			$sql = "SELECT * FROM member WHERE username = ? AND password = SHA1(MD5(?))";
			$ps = $this->koneksi->prepare($sql);
			$ps->execute($data);
			$rs = $ps->fetch();
			return $rs;
		}
	}
?>