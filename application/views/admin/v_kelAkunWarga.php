<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Kelola Warga <a href="<?= base_url(); ?>admin/viewAddDataWarga" class="btn btn-success float-right">Tambah Akun Warga</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($data->result() as $uw) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $uw->username; ?></td>
                            <td><?= $uw->nama; ?></td>
                            <td>
                                <div>
                                    <a href="<?= base_url(); ?>admin/viewEditDataWarga/<?= $uw->id; ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?= base_url(); ?>admin/delete_dataWarga/<?= $uw->id; ?>" class="btn btn-danger">Delete</a>
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