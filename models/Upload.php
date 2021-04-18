<?php 
	
	class Upload {

		function upload() {
	        $namaFile = $_FILES['foto']['name'];
	        $ukuranFiles = $_FILES['foto']['size'];
	        $error = $_FILES['foto']['error'];
	        $tmpName = $_FILES['foto']['tmp_name'];

	        // cek gambar upload
	        if ($error === 4) {
	          echo '
	            <script>
	              alert("pilih gambar terlebih dahulu");
	            </script>
	          ';
	          return false;
	        }

	        // cek type file
	        $extensiGambarValid = ['jpg','jpeg','png'];
	        $extensiGambar = explode('.', $namaFile);
	        $extensiGambar = strtolower(end($extensiGambar));

	        if (!in_array($extensiGambar, $extensiGambarValid)) {
	          echo '
	            <script>
	              alert("yang anda upload bukan gambar");
	            </script>
	          ';
	          return false;
	        }

	        // cek ukuran
	        if ($ukuranFiles > 1000000) {
	          echo '
	            <script>
	              alert("ukuran gambar terlalu besar");
	            </script>
	          ';
	          return false;
	        }

	        // generate nama
	        $namaFileBaru1 = uniqid();
	        $namaFileBaru2 .= '.';
	        $namaFileBaru3 .= $extensiGambar;


	        // lolos cek
	        move_uploaded_file($tmpName, '../assets/images/' . $namaFileBaru3);
	        return $namaFileBaru3;
    	}
	}
?>