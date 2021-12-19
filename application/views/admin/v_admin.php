<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Kelola Akun <a href="<?= base_url(); ?>admin/viewAddDataAdmin" class="btn btn-success float-right">Tambah Akun</a></h6>
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
                        <?php foreach ($data->result() as $ua) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $ua->username; ?></td>
                            <td><?= $ua->nama; ?></td>
                            <td>
                                <div>
                                    <a href="<?= base_url(); ?>admin/viewEditDataAdmin/<?= $ua->id; ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?= base_url(); ?>admin/delete_dataAdmin/<?= $ua->id; ?>" class="btn btn-danger">Delete</a>
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