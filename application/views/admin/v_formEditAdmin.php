<?php
$id = $data->id ?? '';
$username = $data->username ?? '';
$password = $data->password ?? '';
$nama = $data->nama ?? '';
$level = $data->level ?? '';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="<?= base_url(); ?>admin/update_dataAdmin" method="post">
              <input type="hidden" name="id" value="<?= $id; ?>">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="f[username]" value="<?= $username; ?>">
              </div>
              <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="text" class="form-control" id="password" name="f[password]" value="<?= $password; ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" name="f[nama]" value="<?= $nama; ?>">
            </div>

            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputState">Level User</label>
                  <?php
                      $options = array('' => 'Pilih Level',);
                      foreach ($dataLevel->result() as $lv) {
                          $options[$lv->id] = $lv->nama_level;
                      }

                      $attr = array('class' => 'form-control', 'id' => 'inputState', 'required' => 'required');
                      echo form_dropdown('f[level]', $options, $level, $attr);
                      unset($options);
                      unset($attr);
                  ?>
              </div>
            </div>

            <button type="submit" class="btn btn-primary float-right">Edit</button>
          </form>
        </div>
    </div>

</div>