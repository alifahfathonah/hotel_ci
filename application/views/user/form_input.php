<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Tambah User</h3>
  </div>
  <div class="box-body">
    <?php
    echo form_open('user/post','class="form-horizontal"');
    ?>
      <div class="box-body">
        <div class="form-group">
          <label for="nama_lengkap" class="col-sm-2 control-label">Nama lengkap</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
          </div>
        </div>
        <div class="form-group">
          <label for="username" class="col-sm-2 control-label">Username</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="username" placeholder="Username">
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <label for="level" class="col-sm-2 control-label">Level</label>
          <div class="col-sm-10">
            <?php
              $level = array('Resepsionis'=>'Resepsionis','Manajemen'=>'Manajemen','Super Admin'=>'Super Admin');
              echo form_dropdown('level',$level,'','class="form-control"');
            ?>
          </div>
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right" name="submit">Tambah User</button>
      </div>
    </form>
  </div>
</div>
