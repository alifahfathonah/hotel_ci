<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Tambah Kelas</h3>
  </div>
  <div class="box-body">
    <?php
    echo form_open('kelas_kamar/post','class="form-horizontal"');
    ?>
      <div class="box-body">
        <div class="form-group">
          <label for="kelas" class="col-sm-2 control-label">Nama Kelas</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama_kelas" placeholder="Nama Kelas">
          </div>
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right" name="submit">Tambah Kelas</button>
      </div>
    </form>
  </div>
</div>
