<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Tambah Kelas</h3>
  </div>
  <div class="box-body">
    <?php
    echo form_open('manajemen_menu/post','class="form-horizontal"');
    ?>
      <div class="box-body">
        <div class="form-group">
          <label for="nama_menu" class="col-sm-2 control-label">Nama menu</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama_menu" placeholder="Contoh : Transaksi ruangan">
          </div>
        </div>

        <div class="form-group">
          <label for="link" class="col-sm-2 control-label">Link menu</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="link" placeholder="Contoh : laporan/transaksi_ruangan">
          </div>
        </div>

        <div class="form-group">
          <label for="icon" class="col-sm-2 control-label">Icon menu</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="icon" placeholder="Contoh : fa fa-edit">
          </div>
        </div>

        <div class="form-group">
          <label for="level" class="col-sm-2 control-label">Level menu</label>
          <div class="col-sm-10">
            <?php
              $level = array('Resepsionis'=>'Resepsionis','Manajemen'=>'Manajemen','Super Admin'=>'Super Admin');
              echo form_dropdown('level',$level,'','class="form-control"'); 
            ?>
          </div>
        </div>

      </div>


      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right" name="submit">Tambah menu</button>
      </div>
    </form>
  </div>
</div>
