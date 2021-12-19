<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Kelola Surat</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Surat</th>
                            <th>Deskripsi Surat</th>
                            <th>Dari</th>
                            <th>Status Surat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($data->result() as $ks) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $ks->nama_surat; ?></td>
                            <td><?= $ks->deskripsi_surat; ?></td>
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
                            <td>
                                <div>
                                    <a href="<?= base_url(); ?>kelola_surat/viewEditDataSurat/<?= $ks->id; ?>" class="btn btn-primary">View</a>
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