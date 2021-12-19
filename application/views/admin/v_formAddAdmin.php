<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="<?= base_url(); ?>admin/insert_dataAdmin" method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="f[username]">
              </div>
              <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="text" class="form-control" id="password" name="f[password]">
              </div>
            </div>
            <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" name="f[nama]">
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputState">Level User</label>
                <select id="inputState" class="form-control" name="f[level]">
                  <option selected>Pilih...</option>
                  <option value="1">Admin</option>
                  <option value="2">Staff Desa</option>
                </select>
              </div>
            </div>
            <button type="submit" class="btn btn-primary float-right">Tambah</button>
          </form>
        </div>
    </div>

</div>