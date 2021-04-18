<?php 
  
  require_once 'models/Pegawai.php';
  $agama = ['Islam','Kristen','Katolik','Hindu','Budha','Khonghucu'];
  $object = new Pegawai();
  $results = $object->dataDivisi();

  $id = $_REQUEST['id'];
  $data_edit = $object->getPegawai($id);
?>

<h3 class="my-2 mx-2">Form Pegawai</h3>
<hr>
<form class="my-2 mx-2" method="POST" action="controllers/pegawaiController.php" enctype="multipart/form-data">
  <div class="form-group row">
    <label for="nip" class="col-sm-2 col-form-label">NIP</label>
    <div class="input-group col-sm-10">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fas fa-id-card"></i></div>
      </div>
      <input type="text" class="form-control" id="nip" placeholder="NIP" name="nip" value="<?= $data_edit['nip']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="<?= $data_edit['nama']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?= $data_edit['email']; ?>">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Agama</legend>
      <div class="col-sm-5">
        <?php 
          $no = 0;
          foreach ($agama as $ag) {
          $cek = ($data_edit['agama'] == $ag) ? "checked" : "";
        ?>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="agama" id="agama_<?= $no++ ?>" value="<?= $ag; ?>" <?= $cek; ?>>
          <label class="form-check-label" for="kondisi_<?= $no++ ?>">
            <?= $ag; ?>
          </label>
        </div>
        <?php 
          }
        ?>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
    <div class="col-sm-10">
      <select class="form-control" id="divisi" name="divisi">
        <option value="">-- Pilih Divisi --</option>
        <?php 
          foreach ($results as $div) {
          $sel = ($data_edit['iddivisi'] == $div['id']) ? "selected" : "" ;
        ?>
          <option value="<?= $div['id']; ?>" <?= $sel; ?>><?= $div['nama']; ?></option>
        <?php 
          }
        ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
    <div class="col-sm-10">
      <input type="file" class="form-control-file" id="foto" name="foto">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-secondary" name="proses" value="simpan">Simpan</button>
    </div>
  </div>
</form>