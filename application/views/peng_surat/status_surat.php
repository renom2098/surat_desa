<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Status Surat</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Surat</th>
                            <th>Dari</th>
                            <th>Status Surat</th>
                            <th>Komentar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($data->result() as $ks) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $ks->nama_surat; ?></td>
                            <td><?= $ks->dari; ?></td>
                            <td>
                                
                            <?php if ($ks->status_surat == 1) {
                                echo "<p class='badge badge-primary'>Diproses</p>";
                            }
                                elseif ($ks->status_surat == 2){
                                echo "<p class='badge badge-danger'>Ditolak</p>";
                            }
                                elseif ($ks->status_surat == 3){
                                echo "<p class='badge badge-success'>Disetujui</p>";  
                            } 
                            ?>
                                
                            </td>
                            <td><?= $ks->komentar_surat; ?></td>
                            <td>
                                <div>
                                    <a href="<?= base_url(); ?>pengajuan_surat/viewEditDataSurat/<?= $ks->id; ?>" class="btn btn-success">Edit Data</a>
                                    <a href="<?= base_url(); ?>pengajuan_surat/download_hasilSurat/<?= $ks->id; ?>" class="btn btn-primary">Download Surat</a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>