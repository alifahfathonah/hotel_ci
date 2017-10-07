<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Tambah Ruangan</h3>
  </div>
  <div class="box-body">
    <?php
    echo form_open('ruangan/post','class="form-horizontal"');
    ?>
    <div class="box-body">
      <div class="form-group">
        <label for="nama_lantai" class="col-sm-2 control-label">Ruangan</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="nama_ruangan" placeholder="Nama Ruangan">
        </div>
      </div>

      <div class="form-group">
        <label for="nama_lantai" class="col-sm-2 control-label">Jenis Ruangan</label>
        <div class="col-sm-4">
          <select name="id_jenis_ruangan" class="form-control">
          <option value="0">Pilih jenis ruangan</option>
          option
            <?php 
            foreach ($jenis_ruangan as $jr) {
                echo "
                <option value='$jr->id_jenis_ruangan'>$jr->jenis_ruangan</option>";
            }
            ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="kapasitas" class="col-sm-2 control-label">Kapasitas Ruangan</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="kapasitas" placeholder="Kapasitas Ruangan">
        </div>
      </div>

      <div class="form-group">
        <label for="nama_lantai" class="col-sm-2 control-label">Lantai</label>
        <div class="col-sm-4">
          <select class="form-control" name="id_lantai">
            <option value="0">Pilih lantai</option>
            <?php
            foreach ($lantai as $lk) {
              echo "
              <option value='$lk->id_lantai'>$lk->nama_lantai</option>";
            }
            ?>`
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="harga" class="col-sm-2 control-label">Harga</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="harga" placeholder="Harga Ruangan">
        </div>
      </div>

      

    </div>
    <div class="box-footer">
      <button type="submit" class="btn btn-info pull-right" name="submit">Tambah Ruangan</button>
    </div>
  </form>
</div>
</div>
