<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pengajuan Surat</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url(); ?>pengajuan_surat/insert_dataSurat" method="post">
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="nomor_kk">No KK</label>
                    <input type="text" class="form-control" id="nomor_kk" name="f[nomor_kk]">
                </div>

                 <div class="form-group col-md-6">
                    <label for="nomor_nik">No NIK</label>
                    <input type="text" class="form-control" id="nomor_nik" name="f[nomor_nik]">
                </div>

                <div class="form-group col-md-12">
                    <label for="dari">Nama</label>
                    <input type="text" class="form-control" id="dari" name="f[dari]">
                </div>

                <div class="form-group col-md-6">
                    <label for="agama">Agama</label>
                    <input type="text" class="form-control" id="agama" name="f[agama]">
                </div>

                <div class="form-group col-md-6">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="jenis_kelamin" name="f[jenis_kelamin]">
                </div>

                <div class="form-group col-md-6">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="f[tempat_lahir]">
                </div>

                <div class="form-group col-md-6">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="tanggal_lahir" name="f[tanggal_lahir]">
                </div>

                <div class="form-group col-md-6">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" class="form-control" id="pekerjaan" name="f[pekerjaan]">
                </div>

                <div class="form-group col-md-6">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="f[alamat]">
                </div>

                <div class="form-group col-md-12">
                    <label for="nama_surat">Jenis Surat</label>
                    <textarea class="form-control" id="nama_surat" rows="3" name="f[nama_surat]"></textarea>
                </div>

            </div>

            <div class="form-group">
              <label for="deskripsi_surat">Deskripsi Surat</label>
              <textarea class="form-control" id="deskripsi_surat" rows="5" name="f[deskripsi_surat]"></textarea>
            </div>

            <button type="submit" class="btn btn-primary float-right">Kirim</button>
          </form>
        </div>
    </div>

</div>