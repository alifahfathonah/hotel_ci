<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Edit Menu</h3>
  </div>
  <div class="box-body">
    <?php
    echo form_open('manajemen_menu/edit','class="form-horizontal"');
    ?>
    <input type="hidden" name="id" value="<?php echo $record['id_menu']; ?>">
      <div class="box-body">
        <div class="form-group">
          <label for="nama_menu" class="col-sm-2 control-label">Nama menu</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama_menu" value="<?php echo $record['nama_menu']; ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="link" class="col-sm-2 control-label">Link menu</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="link" value="<?php echo $record['link']; ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="icon" class="col-sm-2 control-label">Icon menu</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="icon" value="<?php echo $record['icon']; ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="level" class="col-sm-2 control-label">Level menu</label>
          <div class="col-sm-10">
            <?php
              $level = array('Resepsionis'=>'Resepsionis','Manajemen'=>'Manajemen','Super Admin'=>'Super Admin');
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
