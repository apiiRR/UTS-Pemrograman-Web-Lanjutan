<?php 
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
	class Pegawai {

		private $koneksi;

		public function __construct() {
			global $connect;
			$this->koneksi = $connect;
		}

		public function dataPegawai() {
			$sql = "SELECT pegawai.*, divisi.nama AS divisi FROM pegawai INNER JOIN divisi ON divisi.id = pegawai.iddivisi ORDER BY pegawai.id ASC";
			$ps = $this->koneksi->prepare($sql);
			$ps->execute();
			$rs = $ps->fetchAll();
			return $rs;
		}

		public function getPegawai($id) {
			$sql = "SELECT pegawai.*, divisi.nama AS divisi FROM pegawai INNER JOIN divisi ON divisi.id = pegawai.iddivisi WHERE pegawai.id = ?";
			$ps = $this->koneksi->prepare($sql);
			$ps->execute([$id]);
			$rs = $ps->fetch();
			return $rs;
		}

		public function dataDivisi(){
			$sql = "SELECT * FROM divisi";
			$rs = $this->koneksi->query($sql);
			$rs->execute();
			return $rs;
		}

		public function simpan($data) {
			$sql = "INSERT INTO pegawai (nip, nama, email, agama, iddivisi, foto) VALUES (?,?,?,?,?,?)";
			$ps = $this->koneksi->prepare($sql);
			$ps->execute($data);
		}

		public function ubah($data) {
			$sql = "UPDATE pegawai SET nip=?, nama=?, email=?, agama=?, iddivisi=?, foto=? WHERE id=?";
			$ps = $this->koneksi->prepare($sql);
			$ps->execute($data);
		}

		public function hapus($id) {
			$sql = "DELETE FROM pegawai WHERE id=?";
			$ps = $this->koneksi->prepare($sql);
			$ps->execute($id);
		}


	}
?>