<?php 
	require_once 'models/Pegawai.php';
	$id = $_GET['id'];
	$object = new Pegawai();
	$results = $object->getPegawai($id);
	// var_dump($results
?>
<div class="card text-center">
  <div class="card-header">
    Detail Data Pegawai
  </div>
  <img class="card-img-top mx-auto mt-2" src="assets/images/<?= $results["foto"]; ?>" alt="Gambar tidak tersedia" style="width: 200px;">
  <div class="card-body">
<!--     <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
    <form>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">NIP</label>
      <input type="text" class="form-control text-center" id="validationDefault01" value="<?= $results["nip"]; ?>" required readonly>
    </div>
    <div class="col-md-8 mb-3">
      <label for="validationDefault02">Nama</label>
      <input type="text" class="form-control text-center" id="validationDefault02" value="<?= $results["nama"]; ?>" required readonly>
    </div>
<!--     <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">@</span>
        </div>
        <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div> -->
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Email</label>
      <input type="text" class="form-control text-center" id="validationDefault03" value="<?= $results["email"]; ?>" required readonly>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Agama</label>
      <input type="text" class="form-control text-center" id="validationDefault04" value="<?= $results["agama"]; ?>" required readonly>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Divisi</label>
      <input type="text" class="form-control text-center" id="validationDefault05" value="<?= $results["divisi"]; ?>" required readonly>
    </div>
  </div>
<!--   <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div> -->
</form>
    <a href="index.php?page=dataPegawai" class="btn btn-primary">Kembali</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>