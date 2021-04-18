<?php 
    require_once 'models/Pegawai.php';
    $object = new Pegawai();
    $results = $object->dataPegawai();
?>
<div>
    <div class="row my-2">
        <div class="col-md-6">
            <h4 class="ml-2">Data Pegawai</h4>
        </div>
        <div class="col-md-6 text-right">
            <a href="index.php?page=formPegawai" class="rounded btn btn-dark mr-2 text-white">Tambah Data</a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover my-0 mx-0 text-center">
          <thead>
            <tr class="table-secondary">
              <th scope="col">No</th>
              <th scope="col">Nip</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Agama</th>
              <th scope="col">Divisi</th>
              <th scope="col">Foto</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php  
                $no = 1;
                foreach ($results as $pegawai) {
            ?>
            <tr>
                <td><?= $no++;?></td>
                <td><?= $pegawai['nip'] ?></td>
                <td><?= $pegawai['nama']; ?></td>
                <td><?= $pegawai['email']; ?></td>
                <td><?= $pegawai['agama']; ?></td>
                <td><?= $pegawai['divisi']; ?></td>
                <td>
                  <img class="rounded" style="width: 50px; height: 50px;" src="assets/images/<?= $pegawai['foto']; ?>" alt="">
                </td>
                <td class="btn-group" style="border-bottom: none;">
                    <a href="index.php?page=detailPegawai&id=<?= $pegawai['id']; ?>" class="btn btn-secondary rounded" data-toggle="tooltip" data-placement="bottom" title="Detail"><i class="fas fa-eye"></i></a>
                    <?php 
                        $role = $member['role'];
                        if (isset($member)){
                    ?>
                    <a href="index.php?page=formEditPegawai&id=<?= $pegawai['id']; ?>" class="btn btn-secondary rounded ml-1 mr-1" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                    <?php 
                        if ($role != 'staff'){
                    ?>
                    <form method="POST" action="controllers/pegawaiController.php">
                        <input type="hidden" name="idx" value="<?= $pegawai['id']; ?>" />
                        <button onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-secondary" name="proses" value="hapus"><i class="fas fa-trash"></i></button>
                    </form>
                    <?php 
                        }
                    ?>

                    <?php 
                        }
                    ?>
                </td>
            </tr>
            <?php 
                }
            ?>
          </tbody>
          <thead>
            <tr class="table-secondary">
              <th scope="col">No</th>
              <th scope="col">Nip</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Agama</th>
              <th scope="col">Divisi</th>
              <th scope="col">Foto</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
        </table>
    </div>
</div>