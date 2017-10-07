<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Edit user</h3>
  </div>
  <div class="box-body">
    <?php
    echo form_open('user/edit','class="form-horizontal"');
    ?>
    <input type="hidden" name="id_user" value="<?php echo $record['id_user']; ?>">
    <div class="box-body">
      <div class="form-group">
        <label for="nama_lengkap" class="col-sm-2 control-label">Nama lengkap</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $record['nama_lengkap']; ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="username" class="col-sm-2 control-label">Username</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="username" value="<?php echo $record['username']; ?>">
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
          <!-- <select class="form-control" name="level">
              <option value="<?php echo $record['level']; ?>"><?php echo $record['level']; ?></option>
              <option value="-">-Pilih level-</option>
              <option value="Super Admin">Super Admin</option>
              <option value="Manajemen">Manajemen</option>
              <option value="Resepsionis">Resepsionis</option>
          </select> -->
          <?php
            $level = array('Respsionis'=>'Resepsionis','Manajemen'=>'Manajemen','Super Admin'=>'Super Admin');
            echo form_dropdown('level',$level,$record['level'],'class="form-control"');
          ?>
        </div>
      </div>
    </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right" name="submit">Simpan perubahan</button>
      </div>
    </form>
  </div>
</div>
