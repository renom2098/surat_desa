<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pengajuan Surat</h6>
        </div>
        <div class="card-body">

            <?php echo form_open_multipart('pengajuan_surat/insert_dataSurat'); ?>

            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="nomor_kk">No KK</label>
                    <input type="text" class="form-control" id="nomor_kk" name="nomor_kk">
                </div>

                 <div class="form-group col-md-6">
                    <label for="nomor_nik">No NIK</label>
                    <input type="text" class="form-control" id="nomor_nik" name="nomor_nik">
                </div>

                <div class="form-group col-md-12">
                    <label for="dari">Nama</label>
                    <input type="text" class="form-control" id="dari" name="dari">
                </div>

                <div class="form-group col-md-6">
                    <label for="agama">Agama</label>
                    <input type="text" class="form-control" id="agama" name="agama">
                </div>

                <div class="form-group col-md-6">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <br>
                    <!-- <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin"> -->
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="Laki-Laki">
                        <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="Perempuan">
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                </div>

                <div class="form-group col-md-6">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                </div>

                <div class="form-group col-md-6">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
                </div>

                <div class="form-group col-md-6">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>

                <div class="form-group col-md-12">
                    <label for="nama_surat">Jenis Surat</label>
                    <textarea class="form-control" id="nama_surat" rows="3" name="nama_surat"></textarea>
                </div>

            </div>

            <div class="form-group">
              <label for="deskripsi_surat">Deskripsi Surat</label>
              <textarea class="form-control" id="deskripsi_surat" rows="5" name="deskripsi_surat"></textarea>
            </div>

            <div class="form-group">
                <label>Upload KTP</label>
                <input type="file" class="form-control-file" name="upload_ktp" size="20" accept="image/png, image/jpeg, image/jpg, image/gif">
            </div>

            <div class="form-group">
                <label>Upload KK</label>
                <input type="file" class="form-control-file" name="upload_kk" size="20" accept="image/png, image/jpeg, image/jpg, image/gif">
            </div>

            <button type="submit" class="btn btn-primary float-right">Kirim</button>
          <?php echo form_close(); ?>
        </div>
    </div>

</div>