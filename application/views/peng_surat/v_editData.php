<?php
$id = $data->id ?? '';
$nomor_kk = $data->nomor_kk ?? '';
$nomor_nik = $data->nomor_nik ?? '';
$agama = $data->agama ?? '';
$jenis_kelamin = $data->jenis_kelamin ?? '';
$tempat_lahir = $data->tempat_lahir ?? '';
$tanggal_lahir = $data->tanggal_lahir ?? '';
$pekerjaan = $data->pekerjaan ?? '';
$alamat = $data->alamat ?? '';
$nama_surat = $data->nama_surat ?? '';
$deskripsi_surat = $data->deskripsi_surat ?? '';
$status_surat = $data->status_surat ?? '';
$komentar_surat = $data->komentar_surat ?? '';
$dari = $data->dari ?? '';
$file_surat_dsd = $data->file_surat_dsd ?? '';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="<?= base_url(); ?>pengajuan_surat/update_dataSurat" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $id; ?>">
            <div class="form-row">

              <div class="form-group col-md-6">
                <label for="nomor_kk">Nomor KK</label>
                <input type="text" class="form-control" id="nomor_kk" name="f[nomor_kk]" value="<?= $nomor_kk; ?>">
              </div>

              <div class="form-group col-md-6">
                <label for="nomor_nik">Nomor NIK</label>
                <input type="text" class="form-control" id="nomor_nik" name="f[nomor_nik]" value="<?= $nomor_nik; ?>">
              </div>

              <div class="form-group col-md-12">
                <label for="dari">Nama</label>
                <input type="text" class="form-control" id="dari" name="f[dari]" value="<?= $dari; ?>">
              </div>

              <div class="form-group col-md-6">
                <label for="agama">Agama</label>
                <input type="text" class="form-control" id="agama" name="f[agama]" value="<?= $agama; ?>">
              </div>

              <div class="form-group col-md-6">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <input type="text" class="form-control" id="jenis_kelamin" name="f[jenis_kelamin]" value="<?= $jenis_kelamin; ?>">
              </div>

              <div class="form-group col-md-6">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="f[tempat_lahir]" value="<?= $tempat_lahir; ?>">
              </div>

              <div class="form-group col-md-6">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="text" class="form-control" id="tanggal_lahir" name="f[tanggal_lahir]" value="<?= $tanggal_lahir; ?>">
              </div>

              <div class="form-group col-md-6">
                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" class="form-control" id="pekerjaan" name="f[pekerjaan]" value="<?= $pekerjaan; ?>">
              </div>

              <div class="form-group col-md-6">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="f[alamat]" value="<?= $alamat; ?>">
              </div>

              <div class="form-group col-md-12">
                    <label for="nama_surat">Jenis Surat</label>
                    <textarea class="form-control" id="nama_surat" rows="3" name="f[nama_surat]"><?= $nama_surat; ?> </textarea>
              </div>

              <div class="form-group col-md-12">
                    <label for="deskripsi_surat">Deskripsi Surat</label>
                    <textarea class="form-control" id="deskripsi_surat" rows="5" name="f[deskripsi_surat]"><?= $deskripsi_surat; ?> </textarea>
              </div>

              <div class="form-group col-md-2">
                <label>Status</label>
                <?php if ($status_surat == 1) {
                      echo "<h1 class='bg bg-primary text-white'>Diproses</h1>";
                  }
                      elseif ($status_surat == 2){
                      echo "<h1 class='bg bg-danger text-white'>Ditolak</h1>";
                  }
                      elseif ($status_surat == 3){
                      echo "<h1 class='bg bg-success text-white'>Disetujui</h1>";  
                  }
                  ?>
              </div>

              <div class="form-group col-md-12">
                    <label for="komentar_surat">Komentar</label>
                    <textarea class="form-control" id="komentar_surat" rows="5" name="f[komentar_surat]" disabled><?= $komentar_surat; ?> </textarea>
              </div>

            </div>
            <button type="submit" class="btn btn-primary float-right">Edit</button>
          </form>
        </div>
    </div>

</div>